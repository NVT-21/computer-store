@extends('layouts.app')
@section('title', 'List Product')
<style>
	.item-product {
    display: flex;
    flex-direction: column;
    justify-content: space-between;
    height: 70%; /* Đồng bộ chiều cao */
}
.product-thumb img {
    width: 100%;
    height: auto;
    display: block;
}



</style>
@section('content')
<div id="content">
		<div class="content-page">
			<div class="container">
				<div class="row">
					<div class="col-md-3 col-sm-4 col-xs-12">
						<aside class="sidebar sidebar-left">
							
							<!-- End Widget -->
	
							<!-- End Widget -->
							<div class="widget widget-filter-attr">
								<h2 class="widget-title title14 font-bold text-uppercase inline-block">Category</h2>
								<div class="widget-content">
									<ul class="list-none list-attr">
										@foreach ( $categories as $category  )
										<li><a href="#" class="category-link" data-id="{{ $category->id }}">{{ $category->name }}</a> <span class="count">{{$category->products_count}}</span> </li>
										@endforeach
										
									</ul>
								</div>
							</div>
							<!-- End Widget -->
							<div class="widget widget-filter-attr">
								<h2 class="widget-title title14 font-bold text-uppercase inline-block">Manufacturer</h2>
								<div class="widget-content">
									<ul class="list-none list-attr">
										@foreach ( $brands as $brand  )
										<li><a href="#" class="category-link-brand" data-id="{{ $brand->id }}">{{$brand->name}}</a> <span class="count">{{$brand->products_count}}</span></li>
										@endforeach
										
									</ul>
								</div>
							</div>
							<!-- End Widget -->
						</aside>
					</div>
					<div class="col-md-9 col-sm-8 col-xs-12">
						<div class="banner-slider banner-shop-slider bg-slider">
							<div class="wrap-item" data-pagination="false" data-itemscustom="[[0,1]]">
								<div class="item-slider item-slider-grid">
									<div class="banner-thumb"><a href="#"><img src="images/shop/grid.jpg" alt="" /></a></div>
									<div class="banner-info">
										<div class="container">
											<h2 class="title30 font-bold text-uppercase">Activite Steel</h2>
											<h3 class="title18 inline-block">Styled for life. Built for Health. </h3>
										</div>
									</div>
								</div>
							</div>
						</div>
						<!-- End Banner Slider -->
						<div class="bread-crumb">
							<a href="#" class="silver">Home</a><i class="fa fa-angle-right"></i><span class="gray">Shop Categories</span>
						</div>
						<!-- End Bread Crumb -->
						<div class="title-page">
							<div class="row">
								<div class="col-md-12">
									<h2 class="title24 font-bold text-uppercase pull-left">Products</h2>
									<ul class="sort-pagi-bar list-inline-block pull-right">
										<li>
											
									</ul>
								</div>
							</div>
						</div>
						<!-- End Title -->
						<div class="product-grid-view">
							<div id="product-list" class="row">
								@foreach ($products as $product )
								<div class="col-md-4 col-sm-6 col-xs-6">
									<div class="item-product item-product1">
										<div class="product-thumb">
											<a href="/product-detail/{{$product->id}}" class="product-thumb-link zoom-thumb"><img src="{{$product->image_path}}" alt=""></a>
										</div>
										<div class="product-info">
											<div class="product-price">
												<ins class="color title18 font-bold">${{$product->price}}</ins>
											</div>
											<h3 class="title18 crim-font product-title"><a href="product-detail.html" class="black">{{$product->name}}</a></h3>
											@if($product->category && $product->category->name)
												<a class="cat-parent silver">Category : {{$product->category->name}}</a>
											@endif

											<div class="product-extra-link">
											<form action="{{ route('cart.add', $product->id) }}" method="POST">
											@csrf
											<button type="submit" class="btn btn-primary">Add to Cart</button>
											</form>
												
											</div>
										</div>
									</div>
								</div>
								@endforeach
								
							</div>
							<div class="pagi-nav text-right">
							{{ $products->appends(request()->query())->links() }}
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js" integrity="sha512-v2CJ7UaYy4JwqLDIrZUI/4hqeoQieOmAZNXBeQyjo21dadnwR+8ZaIJVT8EE2iyI61OV8e6M8PP2/4hpQINQ/g==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script>
    document.addEventListener('DOMContentLoaded', function() {
        const categoryLinks = document.querySelectorAll('.category-link');

        categoryLinks.forEach(link => {
            link.addEventListener('click', function(e) {
                e.preventDefault(); // Ngăn chặn hành động mặc định của link

                const categoryId = this.getAttribute('data-id');

                axios.get(`/products/getProductsByCategory/${categoryId}`)
                    .then(response => {
                        const data = response.data; // Dữ liệu sản phẩm trả về
						const products=data.data;
                        const productList = document.getElementById('product-list');
                        productList.innerHTML = ''; // Xóa danh sách sản phẩm hiện tại

                        products.forEach(product => {
                            const productDiv = document.createElement('div');
                            productDiv.classList.add('col-md-4', 'col-sm-6', 'col-xs-6');
                            productDiv.innerHTML = `
                                <div class="item-product item-product1">
                                    <div class="product-thumb">
                                        <a href="#" class="product-thumb-link zoom-thumb"><img src="${product.image_path}" alt=""></a>
                                        <a href="quick-view.html" class="quickview-link fancybox.iframe"><i class="fa fa-search"></i></a>
                                    </div>
                                    <div class="product-info">
                                        <div class="product-price">
                                            <ins class="color title18 font-bold">$${product.price}</ins>
                                        </div>
                                        <h3 class="title18 crim-font product-title"><a href="product-detail.html" class="black">${product.name}</a></h3>
										<form action="add-to-cart/${product.id}" method="POST">
											@csrf
											<button type="submit" class="btn btn-primary">Add to Cart</button>
											</form>
                                        <div class="product-extra-link">
                                            <a href="#" class="wishlist-link"><i class="fa fa-heart"></i></a>
                                            <a href="compare-product.html" class="compare-link fancybox fancybox.iframe"><i class="fa fa-refresh"></i></a>
                                        </div>
                                    </div>
                                </div>`;
                            productList.appendChild(productDiv);
                        });
                    })
                    .catch(error => {
                        console.error('There was an error fetching the products!', error);
                    });
            });
        });
    });
</script>
<script>
	
	$(document).ready(function() {
    $('.category-link').on('click', function(e) {
        e.preventDefault(); // Ngăn chặn hành vi mặc định của liên kết

        // Bỏ chọn tất cả các liên kết
        $('.category-link').removeClass('active');

        // Chọn mục đã nhấn
        $(this).addClass('active');

        // Nếu cần, lấy ID của danh mục đã chọn
        var categoryId = $(this).data('id');
        console.log('Selected Category ID:', categoryId);
        
        // Thực hiện các hành động khác nếu cần
    });
});


</script>

<script>
    document.addEventListener('DOMContentLoaded', function() {
        const categoryLinks = document.querySelectorAll('.category-link-brand');

        categoryLinks.forEach(link => {
            link.addEventListener('click', function(e) {
                e.preventDefault(); // Ngăn chặn hành động mặc định của link

                const categoryId = this.getAttribute('data-id');

                axios.get(`/products/getProductsByBrand/${categoryId}`)
                    .then(response => {
                        const data = response.data; // Dữ liệu sản phẩm trả về
						const products=data.data;
                        const productList = document.getElementById('product-list');
                        productList.innerHTML = ''; // Xóa danh sách sản phẩm hiện tại

                        products.forEach(product => {
                            const productDiv = document.createElement('div');
                            productDiv.classList.add('col-md-4', 'col-sm-6', 'col-xs-6');
                            productDiv.innerHTML = `
                                <div class="item-product item-product1">
                                    <div class="product-thumb">
                                        <a href="#" class="product-thumb-link zoom-thumb"><img src="${product.image_path}" alt=""></a>
                                        <a href="quick-view.html" class="quickview-link fancybox.iframe"><i class="fa fa-search"></i></a>
                                    </div>
                                    <div class="product-info">
                                        <div class="product-price">
                                            <ins class="color title18 font-bold">$${product.price}</ins>
                                        </div>
                                        <h3 class="title18 crim-font product-title"><a href="product-detail.html" class="black">${product.name}</a></h3>
										<form action="add-to-cart/${product.id}" method="POST">
											@csrf
											<button type="submit" class="btn btn-primary">Add to Cart</button>
											</form>
                                        <div class="product-extra-link">
                                            <a href="#" class="wishlist-link"><i class="fa fa-heart"></i></a>
                                            <a href="compare-product.html" class="compare-link fancybox fancybox.iframe"><i class="fa fa-refresh"></i></a>
                                        </div>
                                    </div>
                                </div>`;
                            productList.appendChild(productDiv);
                        });
                    })
                    .catch(error => {
                        console.error('There was an error fetching the products!', error);
                    });
            });
        });
    });
</script>
<script>
	const btnFilterPrice=$('#btn-filter-price')
	btnFilterPrice.on('click', function() {
		const minPrice=document.querySelector('.min-price').innerText;
        const maxPrice=document.querySelector('.max-price').innerText;
		const minPriceValue=minPrice.replace('$','')
		const maxPriceValue=maxPrice.replace('$','')
		axios.get(`/products/getProductsByPrice/${minPriceValue}/${maxPriceValue}`)
		.then(response => {
                        const data = response.data; // Dữ liệu sản phẩm trả về
						console.log(data);
						const products=data.data;
                        const productList = document.getElementById('product-list');
                        productList.innerHTML = ''; // Xóa danh sách sản phẩm hiện tại

                        products.forEach(product => {
                            const productDiv = document.createElement('div');
                            productDiv.classList.add('col-md-4', 'col-sm-6', 'col-xs-6');
                            productDiv.innerHTML = `
                                <div class="item-product item-product1">
                                    <div class="product-thumb">
                                        <a href="#" class="product-thumb-link zoom-thumb"><img src="${product.image_path}" alt=""></a>
                                        <a href="quick-view.html" class="quickview-link fancybox.iframe"><i class="fa fa-search"></i></a>
                                    </div>
                                    <div class="product-info">
                                        <div class="product-price">
                                            <ins class="color title18 font-bold">$${product.price}</ins>
                                        </div>
                                        <h3 class="title18 crim-font product-title"><a href="product-detail.html" class="black">${product.name}</a></h3>
                                        <a href="#" class="cat-parent silver">Fashion <span class="title10 silver">(8)</span></a>
                                        <div class="product-extra-link">
                                            <a href="#" class="addcart-link">Add to Cart</a>
                                            <a href="#" class="wishlist-link"><i class="fa fa-heart"></i></a>
                                            <a href="compare-product.html" class="compare-link fancybox fancybox.iframe"><i class="fa fa-refresh"></i></a>
                                        </div>
                                    </div>
                                </div>`;
                            productList.appendChild(productDiv);
                        });
						const paginationNav = document.querySelector('.pagi-nav');
            paginationNav.innerHTML = ''; // Xóa phân trang hiện tại

            // Tạo lại các liên kết phân trang
            if (data.links) {
                data.links.forEach(link => {
                    const paginationLink = document.createElement('a');
                    paginationLink.href = '#';
                    paginationLink.classList.add(link.active ? 'current' : ''); // Thêm class cho trang hiện tại
                    paginationLink.innerHTML = link.label;
                    paginationLink.addEventListener('click', function(e) {
                        e.preventDefault();
                        btnFilterPrice.trigger('click', [link.page]); // Gọi lại lọc với trang mới
                    });
                    paginationNav.appendChild(paginationLink);
                });
            }
                    })
                    .catch(error => {
                        console.error('There was an error fetching the products!', error);
                    });
	})
</script>

	</div>
@endsection