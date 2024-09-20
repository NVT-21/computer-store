<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Services\ProductService;
use App\Http\Requests\ProductRequest;
class ProductController
{
    protected $productService ;
    public function __construct(ProductService $productService )
    {
        $this->productService = $productService;
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
        return view('Admin.Product.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(ProductRequest $request)
    {
        $data = $request->validated();
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
}
