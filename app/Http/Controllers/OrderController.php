<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Order;
use App\Services\ProductService;
use App\Services\OrderService;
class OrderController
{
    protected $productService;
    protected $orderService;
    public function __construct(ProductService $productService, OrderService $orderService)
    {
        $this->productService = $productService;
        $this->orderService = $orderService;
    }
    public function storeOrder(Request $request)
    {
        $user =Auth::user();
        if(!$user) return back()->with("error","User not logged in");
        $order = Order::create([
            'full_name' => $request->input('full_name'),
            'phone_number' => $request->input('phone_number'),
            'address' => $request->input('address'),
            'user_id' => $user->id, 
        ]);
        $this->saveOrderProducts($order);
        return redirect()->route('home')->with('success', 'Order placed successfully');
    }
    public function saveOrderProducts(Order $order)
{
    // Retrieve cart data from the session
    $cart = session('cart');


    // Prepare the data for the pivot table
    $productsWithQuantities = [];

    foreach ($cart as $productId => $details) {
        $productsWithQuantities[$productId] = ['quantity' => $details['quantity']];
    }

    // Attach products with quantities to the order
    $order->products()->attach($productsWithQuantities);

    // Clear the cart after saving
    session()->forget('cart');
}
    public function index()
    {
        $orders = $this->orderService->paginate(null,8);

        return view('Admin.Order.index', compact('orders'));
    }
    public function show($id){
        $order=$this->orderService->getById($id);
        return view('Admin.Order.edit', compact('order'));
    }
    public function destroy($id)
    {
        $this->orderService->destroy($id);
        return back()->with("success","Successfully deleted");
    }
    public function update(Request $request, $id)
    {
        $data=$request->all();
        $data['total_amount']= str_replace(['$', ','], '', $data['total_amount']);
        $this->orderService->update($id,$data);
        return back()->with("success","Successfully updated");
    }
    public function showViewSales()
    {  
        $calculateOrders = $this->orderService->calculateOrdersByTime(null, null);

        // Use compact to pass the variable
        return view("Admin.Sales.index", compact("calculateOrders"));
    }
    public function calculateOrdersByTime(Request $request)
    {
        $month = $request->input('month');
        $year = $request->input('year');

        $calculateOrders = $this->orderService->calculateOrdersByTime($month, $year);

        return view("Admin.Sales.index", compact("calculateOrders"));
    }

}
