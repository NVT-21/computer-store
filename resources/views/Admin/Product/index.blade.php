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
                                <img src="{{ asset('storage/' . $product->image_path) }}" alt="{{ $product->name }}" width="100">
                            @else
                                No image
                            @endif
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>

        <!-- Pagination links -->
        {{ $products->links() }}
    @else
        <p>No products found.</p>
    @endif
</section>
</div>
@endsection
