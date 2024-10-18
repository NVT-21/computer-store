@extends('layouts.app')

@section('title', 'Checkout')

@section('content')
<div class="container">
    <h1 class="my-4">Checkout</h1>
    
    <!-- Display any validation errors -->
    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <!-- Checkout Form -->
    <form action="{{ route('order.storeOrder') }}" method="POST">
        @csrf

        <!-- Personal Details -->
        <div class="form-group">
            <label for="name">Full Name</label>
            <input type="text" class="form-control" id="full_name" name="full_name" placeholder="Enter your full name" required>
        </div>

        <div class="form-group">
            <label for="phone">Phone Number</label>
            <input type="text" class="form-control" id="phone_number" name="phone_number" placeholder="Enter your phone number" required>
        </div>

        <div class="form-group">
            <label for="address">Shipping Address</label>
            <input class="form-control" id="address" name="address"  placeholder="Enter your shipping address" required></input>
        </div>

        <!-- Payment Button -->
        <button type="submit" class="btn btn-primary">Proceed to Payment</button>
    </form>
</div>
@endsection
