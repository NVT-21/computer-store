<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Order;
class OrderController
{
    public function storeOrder(Request $request)
    {
        $user =Auth::user();
        if(!$user) return back()->with("error","User not logged in");
        $order = Order::create([
            'full_name' => $request->input('full_name'),
            'phone_number' => $request->input('phone_number'),
            'address' => $request->input('address'),
            'user_id' => $user->id, // Assuming authenticated user
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

}
