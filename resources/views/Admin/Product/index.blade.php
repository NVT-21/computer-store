@extends('layouts.admin')

@section('content')
<div class="content-wrapper">
<section class="content">
    <h2>Products</h2>

    @if ($products->count())
        <table class="table">
            <thead>
                <tr>
                    <th>Name</th>
                    <th>Stock</th>
                    <th>Price</th>
                    <th>Sale Price</th>
                    <th>Image</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($products as $product)
                    <tr>
                        <td>{{ $product->name }}</td>
                        <td>{{ $product->stock }}</td>
                        <td>{{ $product->price }}</td>
                        <td>{{ $product->sale_price }}</td>
                        <td>
                            @if ($product->image_path)
                                <img src="{{ $product->image_path }}" alt="{{ $product->name }}" width="100">
                            @else
                                No image
                            @endif
                        </td>
                     <td>
                        <a href="{{ route('product.show', $product->id) }}" class="btn btn-primary btn-sm">Edit</a>
                        <form action="{{ route('products.destroy', $product->id) }}" method="POST" style="display:inline;">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Are you sure?')">Delete</button>
                        </form>
                    </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
        <div class="pagi-nav text-right">
        {{ $products->links('pagination::bootstrap-5') }}
		</div>

    @else
        <p>No products found.</p>
    @endif
</section>
</div>
@endsection
