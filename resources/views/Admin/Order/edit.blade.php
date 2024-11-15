@extends('layouts.admin')

@section('content')
<div class="content-wrapper">
    <div class="content">
    

        <!-- Display success message if any -->
        @if(session('success'))
            <div class="alert alert-success">
                {{ session('success') }}
            </div>
        @endif

        <!-- Order Information Form -->
        <form action="{{ route('orders.update', $order->id) }}" method="POST">
            @csrf
            @method('PUT') <!-- Method to specify PUT request for updating -->

            <div class="order-info">
                <h3>Order Information</h3>

                <!-- Customer Name -->
                <div class="form-group">
                    <label for="full_name">Customer Name:</label>
                    <input type="text" name="full_name" class="form-control" value="{{ old('full_name', $order->full_name) }}">
                </div>

                <!-- Phone Number -->
                <div class="form-group">
                    <label for="phone_number">Phone Number:</label>
                    <input type="text" name="phone_number" class="form-control" value="{{ old('phone_number', $order->phone_number) }}">
                </div>

                <!-- Address -->
                <div class="form-group">
                    <label for="address">Address:</label>
                    <input type="text" name="address" class="form-control" value="{{ old('address', $order->address) }}">
                </div>

                <!-- Total Amount (read-only) -->
                <div class="form-group">
                    <label for="total_amount">Total Amount:</label>
                    <input type="text" name="total_amount" class="form-control" value="${{ number_format($order->total_amount, 2) }}" readonly>
                </div>

                <!-- Status -->
                <div class="form-group">
                    <label for="status">Status:</label>
                    <select name="status" class="form-control">
                        <option value="Pending" {{ old('status', $order->status) == 'Pending' ? 'selected' : '' }}>Pending</option>
                        <option value="Processing" {{ old('status', $order->status) == 'Processing' ? 'selected' : '' }}>Processing</option>
                        <option value="Completed" {{ old('status', $order->status) == 'Completed' ? 'selected' : '' }}>Completed</option>
                        <option value="Cancelled" {{ old('status', $order->status) == 'Cancelled' ? 'selected' : '' }}>Cancelled</option>
                    </select>
                </div>
            </div>

            <!-- Order Products (read-only list) -->
            <div class="order-products">
                <h3>Products in this Order</h3>
                @if($order->products->isNotEmpty())
                    <table class="table">
                        <thead>
                            <tr>
                                <th>Product Name</th>
                                <th>Quantity</th>
                                <th>Unit Price</th>
                                <th>Total Price</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($order->products as $product)
                                <tr>
                                    <td>{{ $product->name }}</td>
                                    <td>{{ $product->pivot->quantity }}</td>
                                    <td>${{ number_format($product->sale_price, 2) }}</td>
                                    <td>${{ number_format($product->pivot->quantity * $product->sale_price, 2) }}</td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                @else
                    <p>No products found for this order.</p>
                @endif
            </div>

            <!-- Submit and Back Buttons -->
            <div class="form-group">
                <button type="submit" class="btn btn-primary">Update Order</button>
                <a href="{{ route('orders.index') }}" class="btn btn-secondary">Back to Orders</a>
            </div>
        </form>
    </div>
</div>
@endsection
