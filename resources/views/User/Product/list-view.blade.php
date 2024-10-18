@extends('layouts.app')
@section('title', 'List View Product')

@section('content')
<div id="content">
		<div class="content-page">
			<div class="container">
				<div class="row">
					<div class="col-md-3 col-sm-4 col-xs-12">
						<aside class="sidebar sidebar-left">
						
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
									<h2 class="title24 font-bold text-uppercase pull-left">Electronics</h2>
									<ul class="sort-pagi-bar list-inline-block pull-right">
										<li>
											<div class="dropdown-box show-by">
												<a href="#" class="dropdown-link"><span class="gray">Show</span><span class="gray number-show">6</span></a>
												<ul class="dropdown-list list-none">
													<li><a href="#">6</a></li>
													<li><a href="#">9</a></li>
													<li><a href="#">12</a></li>
													<li><a href="#">18</a></li>
													<li><a href="#">24</a></li>
												</ul>
											</div>
										</li>
										<li>
											<div class="view-type">
												<a href="#" class="grid-view"><i class="icon ion-grid"></i></a>
												<a href="#" class="list-view active"><i class="icon ion-navicon"></i></a>
											</div>
										</li>
									</ul>
								</div>
							</div>
						</div>
						<!-- End Title -->
						<div class="product-list-view">
							<div class="row">
								@if ($products == null || $products->isEmpty())
								<p>Not found</p>
								@else
								@foreach ($products as $product )
								<div class="col-md-12">
									<div class="item-product item-product-list">
										<div class="row">
											<div class="col-md-4 col-sm-4 col-xs-12">
												<div class="product-thumb">
													<a href="#" class="product-thumb-link zoom-thumb"><img src="images/product/fashion/marketsale-watch-02.jpg" alt=""></a>
													<a href="/product-detail/{{$product->id}}" class="quickview-link fancybox.iframe"><i class="fa fa-search"></i></a>
												</div>
											</div>
											<div class="col-md-8 col-sm-8 col-xs-12">
												<div class="product-info">
													<h3 class="title18 font-bold product-title"><a href="product-detail.html">{{$product->name}}</a></h3>
													<div class="product-price">
														<ins class="color title18 font-bold">${{$product->price}}</ins>
													</div>
													<a href="#" class="cat-parent silver">Fashion <span class="title10 silver">(8)</span></a>
													<div class="product-extra-link">
														<a href="#" class="addcart-link">Add to Cart</a>
														<a href="#" class="wishlist-link"><i class="fa fa-heart"></i></a>
														<a href="compare-product.html" class="compare-link fancybox fancybox.iframe"><i class="fa fa-refresh"></i></a>
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>
								@endforeach
								@endif
							</div>
							<div class="pagi-nav text-right">
							{{ $products->links() }}
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
    @endsection