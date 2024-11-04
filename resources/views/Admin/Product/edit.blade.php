@extends('layouts.admin')

@section('content')
<div class="content-wrapper">
<div class="content">
    <h2>Edit Product</h2>

    <!-- Display success message -->
    @if(session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif

    <!-- Display validation errors -->
    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <!-- Product edit form -->
    <form action="{{ route('products.update', $product->id) }}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT') <!-- Thêm method PUT cho form update -->
        
        <!-- Name field -->
        <div class="form-group">
            <label for="name">Product Name:</label>
            <input type="text" name="name" class="form-control" value="{{ old('name', $product->name) }}">
        </div>

        <!-- Stock field -->
        <div class="form-group">
            <label for="stock">Stock:</label>
            <input type="number" name="stock" class="form-control" value="{{ old('stock', $product->stock) }}">
        </div>

        <!-- Price field -->
        <div class="form-group">
            <label for="price">Price:</label>
            <input type="number" name="price" class="form-control" value="{{ old('price', $product->price) }}">
        </div>

        <!-- Sale Price field -->
        <div class="form-group">
            <label for="sale_price">Sale Price (Optional):</label>
            <input type="number" name="sale_price" class="form-control" value="{{ old('sale_price', $product->sale_price) }}">
        </div>

        <!-- Image Upload field -->
        <div class="form-group">
            <label for="image_path">Product Image (Optional):</label>
            <input type="file" name="image" class="form-control">
            @if ($product->image_path)
                <div>
                    <img src="/{{ $product->image_path }}" alt="{{ $product->name }}" width="100">
                    <p>Current Image</p>
                </div>
            @endif
        </div>

        <!-- Category field -->
        <div class="form-group">
            <label for="category_id">Category:</label>
            <select name="category_id" class="form-control">
                <option value="">Select a category</option>
                @foreach ($categories as $category)
                    <option value="{{ $category->id }}" {{ old('category_id', $product->category_id) == $category->id ? 'selected' : '' }}>
                        {{ $category->name }}
                    </option>
                @endforeach
            </select>
        </div>

        <!-- Submit button -->
        <div class="form-group">
            <button type="submit" class="btn btn-primary">Update Product</button>
        </div>
    </form>
</div>
</div>
@endsection
