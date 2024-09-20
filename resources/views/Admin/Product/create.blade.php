
<div class="container">
    <h2>Create Product</h2>

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

    <!-- Product creation form -->
    <form action="{{ route('products.store') }}" method="POST" enctype="multipart/form-data">
        @csrf
        
        <!-- Name field -->
        <div class="form-group">
            <label for="name">Product Name:</label>
            <input type="text" name="name" class="form-control" value="{{ old('name') }}">
        </div>

        <!-- Stock field -->
        <div class="form-group">
            <label for="stock">Stock:</label>
            <input type="number" name="stock" class="form-control" value="{{ old('stock') }}">
        </div>

        <!-- Price field -->
        <div class="form-group">
            <label for="price">Price:</label>
            <input type="number" name="price" class="form-control" value="{{ old('price') }}">
        </div>

        <!-- Sale Price field -->
        <div class="form-group">
            <label for="sale_price">Sale Price (Optional):</label>
            <input type="number" name="sale_price" class="form-control" value="{{ old('sale_price') }}">
        </div>

        <!-- Image Upload field -->
        <div class="form-group">
            <label for="image_path">Product Image (Optional):</label>
            <input type="file" name="image_path" class="form-control">
        </div>

        <!-- Category field -->
        

        <!-- Submit button -->
        <div class="form-group">
            <button type="submit" class="btn btn-primary">Create Product</button>
        </div>
    </form>
</div>

