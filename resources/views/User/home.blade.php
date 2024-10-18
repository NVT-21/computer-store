

@extends('layouts.app')

@section('content')
	<div id="content">
		<div class="container">
			<div class="banner-slider bg-slider parallax-slider banner-slider1">
				<div class="wrap-item pagi-border square-navi" data-navigation="true" data-itemscustom="[[0,1]]" data-autoplay="true" data-transition="fade">
					<div class="item-slider item-slider1">
						<div class="banner-thumb"><a href="#"><img src="images/home/home1/slide1.jpg" alt="" /></a></div>
						<div class="banner-info text-center black text-uppercase animated" data-animated="zoomIn">
							<div class="container">
							<h3 class="title30 crim-font font-bold">Technology & Innovation</h3>
							<h2 class="title48 crim-font font-bold color">Best-Selling PCs</h2>
							<h3 class="title30 crim-font font-bold">Latest Collection</h3>
							<a href="#" class="shop-button bg-white">Shop Now</a>

							</div>
						</div>
					</div>
					<div class="item-slider item-slider1">
						<div class="banner-thumb"><a href="#"><img src="images/home/home1/slide2.jpg" alt="" /></a></div>
						<div class="banner-info text-center black text-uppercase animated" data-animated="zoomIn">
							<div class="container">
							<h3 class="title30 crim-font font-bold">Power Up Your Workspace</h3>
							<h2 class="title48 crim-font font-bold color">Laptops & PCs</h2>
							<h3 class="title30 crim-font font-bold">Up to 20% Off</h3>
							<a href="#" class="shop-button bg-white">Shop Now</a>

							</div>
						</div>
					</div>
					<div class="item-slider item-slider1">
						<div class="banner-thumb"><a href="#"><img src="images/home/home1/slide3.jpg" alt="" /></a></div>
						<div class="banner-info text-center black text-uppercase animated" data-animated="zoomIn">
							<div class="container">
							<h3 class="title30 crim-font font-bold">Summer Collection</h3>
							<h2 class="title48 crim-font font-bold color">Tech Gadgets</h2>
							<h3 class="title30 crim-font font-bold">For All Ages</h3>
							<a href="#" class="shop-button bg-white">Shop Now</a>

							</div>
						</div>
					</div>
				</div>
			</div>
			<!-- End Banner Slider -->
			<div class="list-adv1">
				<div class="row">
					<div class="col-md-3 col-sm-6 col-xs-12">
						<div class="item-adv1 banner-adv zoom-image">
							<a href="#" class="adv-thumb-link"><img src="images/home/home1/ad1.jpg" alt="" /></a>
							<div class="banner-info">
								<h3 class="title18 text-uppercase font-bold crim-font">PC</h3>
								<p class="desc black">Up to <span class="title18 font-bold color">20% off</span></p>
							</div>
						</div>
					</div>
					<div class="col-md-3 col-sm-6 col-xs-12">
						<div class="item-adv1 banner-adv zoom-image">
							<a href="#" class="adv-thumb-link"><img src="images/home/home1/ad2.jpg" alt="" /></a>
							<div class="banner-info">
								<h3 class="title18 text-uppercase font-bold crim-font">LapTop Gaming</h3>
								<p class="desc black">From <span class="title18 font-bold color">$690.00</span></p>
							</div>
						</div>
					</div>
					<div class="col-md-3 col-sm-6 col-xs-12">
						<div class="item-adv1 banner-adv zoom-image">
							<a href="#" class="adv-thumb-link"><img src="images/home/home1/ad3.jpg" alt="" /></a>
							<div class="banner-info">
								<h3 class="title18 text-uppercase font-bold crim-font">office laptop</h3>
								<p class="desc black">From <span class="title18 font-bold color">$359.00</span></p>
							</div>
						</div>
					</div>
					<div class="col-md-3 col-sm-6 col-xs-12">
						<div class="item-adv1 banner-adv zoom-image">
							<a href="#" class="adv-thumb-link"><img src="images/home/home1/ad4.jpg" alt="" /></a>
							<div class="banner-info">
								<h3 class="title18 text-uppercase font-bold crim-font">Mouse</h3>
			
							</div>
						</div>
					</div>
				</div>
			</div>
			<!-- End Adv -->
			<div class="block-product1">
				<h2 class="title18 crim-font title-box1 font-bold text-uppercase"><i class="fa fa-flash"></i>Best-selling PC</h2>
				<div class="product-slider">
					<div class="wrap-item group-navi rect-navi" data-pagination="false" data-navigation="true" data-itemscustom="[[0,1],[560,2],[768,3],[990,4],[1200,5]]">
						@foreach ($bestSellingPCGaming as $Pc)
						<div class="item-product item-product1">
							<div class="product-thumb">
								<a href="#" class="product-thumb-link zoom-thumb"><img src="images/product/furniture/marketsale-furniture-04.jpg" alt="" /></a>
								<a href="/product-detail/{{$Pc->id}}" class="quickview-link fancybox.iframe"><i class="fa fa-search"></i></a>
							</div>
							<div class="product-info">
								<div class="product-price">
									<ins class="color title18 font-bold">$ {{$Pc->product_price}}</ins>
								</div>
								<h3 class="title18 crim-font product-title"><a href="/product-detail/{{$Pc->id}}" class="black">{{ $Pc->product_name }}</a></h3>
								<a href="#" class="cat-parent silver">Quantity Sold <span class="title10 silver">({{$Pc ->total_sold}})</span></a>
								<div class="product-extra-link">
								<form action="{{ route('cart.add', $Pc->id) }}" method="POST">
											@csrf
											<button type="submit" class="btn btn-primary">Add to Cart</button>
								</form>
								</div>
							</div>
						</div>
						@endforeach
					</div>
				</div>
			</div>
			<!-- End Block Product -->
			<div class="list-product-adv1">
				<div class="row">
					<div class="col-md-6 col-sm-6 col-xs-12">
						<div class="banner-adv fade-out-in">
							<a href="#" class="adv-thumb-link"><img src="images/home/home1/bn1.jpg" alt="" /></a>
						</div>
					</div>
					<div class="col-md-6 col-sm-6 col-xs-12">
						<div class="banner-adv fade-out-in">
							<a href="#" class="adv-thumb-link"><img src="images/home/home1/bn2.jpg" alt="" /></a>
						</div>
					</div>
				</div>
			</div>
			<!-- End Product Adv -->
			<div class="block-product1">
				<h2 class="title18 crim-font title-box1 font-bold text-uppercase"><i class="fa fa-flash"></i>best-selling laptop</h2>
				<div class="product-slider">
					<div class="wrap-item group-navi rect-navi" data-pagination="false" data-navigation="true" data-itemscustom="[[0,1],[560,2],[768,3],[990,4],[1200,5]]">
					@foreach ($bestSellingLapTop as $Pc)
						<div class="item-product item-product1">
							<div class="product-thumb">
								<a href="#" class="product-thumb-link zoom-thumb"><img src="images/product/beauty/marketsale-beauty-14.jpg" alt="" /></a>
								<a href="/product-detail/{{$Pc->id}}" class="quickview-link fancybox.iframe"><i class="fa fa-search"></i></a>
							</div>
							<div class="product-info">
								<div class="product-price">
									<ins class="color title18 font-bold">$ {{$Pc->product_price}}</ins>
								</div>
								<h3 class="title18 crim-font product-title"><a href="product-detail.html" class="black">{{ $Pc->product_name }}</a></h3>
								<a href="#" class="cat-parent silver">Quantity Sold <span class="title10 silver">({{$Pc ->total_sold}})</span></a>
							</div>
							<div class="product-extra-link">
								<form action="{{ route('cart.add', $Pc->id) }}" method="POST">
											@csrf
											<button type="submit" class="btn btn-primary">Add to Cart</button>
								</form>
								<a href="#" class="wishlist-link"><i class="fa fa-heart"></i></a>
								<a href="compare-product.html" class="compare-link fancybox fancybox.iframe"><i class="fa fa-refresh"></i></a>
							</div>
						</div>
						@endforeach
					</div>
				</div>
			</div>
			<!-- End Block Product -->
			<div class="list-product-adv1">
				<div class="row">
					<div class="col-md-6 col-sm-6 col-xs-12">
						<div class="banner-adv fade-out-in">
							<a href="#" class="adv-thumb-link"><img src="images/home/home1/bn3.jpg" alt="" /></a>
						</div>
					</div>
					<div class="col-md-6 col-sm-6 col-xs-12">
						<div class="banner-adv fade-out-in">
							<a href="#" class="adv-thumb-link"><img src="images/home/home1/bn4.jpg" alt="" /></a>
						</div>
					</div>
				</div>
			</div>
			<!-- End Product Adv -->
			<!-- End Store -->
			<div class="banner-adv adv-collect1 zoom-image fade-in-out">
				<a href="#" class="adv-thumb-link"><img src="images/home/home1/bn5.jpg" alt="" /></a>
				<div class="banner-info text-center text-uppercase">
					<h3 class="title30 inline-block font-bold">Defi lift 3d</h3>
					<h4 class="title18">collection</h4>
					<a href="#" class="shop-button">Shop Now</a>
				</div>
			</div>
			<!-- End Adv -->
		
			<!-- End Cat Slider -->
		</div>
	</div>
	
	<!-- End Preload -->
	<a href="#" class="scroll-top dark"><i class="fa fa-angle-double-up"></i></a>
@endsection