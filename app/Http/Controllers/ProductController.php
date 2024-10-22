<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Services\ProductService;
use App\Services\CategoryService;
use App\Services\BrandService;
use App\Http\Requests\ProductRequest;
class ProductController
{
    protected $productService ;
    protected $categoryService ;
    protected $brandService ;
    public function __construct(ProductService $productService , CategoryService $cateforyService, BrandService $brandService)
    {
        $this->productService = $productService;
        $this->categoryService = $cateforyService;
        $this->brandService = $brandService;
    }
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $products=$this->productService->paginate(null,1);
        return view("Admin.Product.index",compact('products'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $categories=$this->categoryService->getAll();
        return view('Admin.Product.create',['categories'=>$categories]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(ProductRequest $request)
    {
        $data = $request->validated();
        if($request->hasFile("image"))
        {
            $file = $request->file('image');

            // Generate a unique filename
            $filename = time() . '-' . $file->getClientOriginalName();
            $file->move(public_path('images/product'), $filename);
            $data['image_path'] = 'images/product/' . $filename;
        }
       $result= $this->productService->create($data);
       if($result['success']){

           return back()->with("success","Successfully created");
       }
       else {
        return back()->with("error","Failed to create");
       }
    }

    /**
     * Display the specified resource.
     */
    public function show( $id)
    {
        $currentProduct=$this->productService->getById($id);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(ProductRequest $request,  $id)
    {
        $data=$request->validated();
        $this->productService->update($id,$data);
        return back()->with("success","Successfully updated");
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy( $id)
    {
        $this->productService->destroy($id);
        return back()->with("success","Successfully deleted");
    }
    public function showViewProducts()
    {
        $products=$this->productService->paginate(null,9);
        $categories=$this->categoryService->getCategoriesWithProduct();
       $brands=$this->brandService->getBrandsWithProductCount(6);
        return view("User.Product.list-product",['products'=>$products,'brands'=>$brands,'categories'=>$categories]);
    }
    public function showViewListProducts(){
        $products=$this->productService->paginate(null,9);
        $categories=$this->categoryService->getCategoriesWithProduct();
       $brands=$this->brandService->getBrandsWithProductCount(6);
        return view("User.Product.list-view",['products'=>$products,'brands'=>$brands,'categories'=>$categories]);
    }
    public function showCart()
    {
        $cart = session()->get('cart');
        return view("User.Product.cart",compact("cart"));
    }
    public function getProductsByCategory($categoryId)
    {
        $products=$this->productService->getProductsByCategory($categoryId);
        return response()->json($products);
    }
    public function getProductsByBrand($brandId)
    {
        $products=$this->productService->getProductsByBrand($brandId);
        return response()->json($products);

    }
    public function getProductsByPrice($minPrice,$maxPrice)
    {
        $products=$this->productService->getProductsByPrice($minPrice,$maxPrice);
        return response()->json($products);
    }
    public function addToCart(Request $request, $productId)
    {
        $product =$this->productService->getById($productId);
        $cart=session()->get('cart',[]);
        if (isset($cart[$productId])) {
            $cart[$productId]['quantity']++;
        } else {
            // Nếu chưa có sản phẩm trong giỏ, thêm mới
            $cart[$productId] = [
                "name" => $product->name,
                "quantity" => 1,
                "price" => $product->price,
                "image" => $product->image_path
            ];
        }
        session()->put('cart', $cart);

        // Chuyển hướng về trang giỏ hàng với thông báo thành công
        return redirect()->back()->with('success', 'Product added to cart successfully!');
    }
    public function removeProductOfCart($id)
{
    // Get the cart from the session
    $cart = session()->get('cart');

    // If the product exists in the cart, remove it
    if (isset($cart[$id])) {
        unset($cart[$id]);
        session()->put('cart', $cart); // Update the session with the new cart
    }

    // Optionally return updated cart or success response
    return response()->json([
        'success' => true,
        'message' => 'Product removed successfully',
        'cart' => $cart 
    ]);
}

    public function showProductBySearch(Request $request)
    {   $keyword = $request->query('s');
         $products=$this->productService->paginate($keyword,9);
        return  view('User.Product.list-view',['products'=>$products]);
    }
    public function showProductDetail($idProduct)
    {   $product=$this->productService->getById($idProduct);
        return view('User.Product.product-detail',['product'=>$product]);
    }
    public function showViewCheckOut()
    {
        return view('User.Product.check-out');
    }
}
