

@extends('layouts.app')

@section('content')
	<div id="content">
		<div class="container">
			<div class="banner-slider bg-slider parallax-slider banner-slider1">
				<div class="wrap-item pagi-border square-navi" data-navigation="true" data-itemscustom="[[0,1]]" data-autoplay="true" data-transition="fade">
					<div class="item-slider item-slider1">
						<div class="banner-thumb"><a href="#"><img src="images/home/home1/LapStore.png" alt="" /></a></div>
						<div class="banner-info text-center black text-uppercase animated" data-animated="zoomIn">
							<div class="container">
							

							</div>
						</div>
					</div>
					<div class="item-slider item-slider1">
						<div class="banner-thumb"><a href="#"><img src="images/home/home1/MacMini.png" alt="" /></a></div>
						<div class="banner-info text-center black text-uppercase animated" data-animated="zoomIn">
							<div class="container">
							

							</div>
						</div>
					</div>
					<div class="item-slider item-slider1">
						<div class="banner-thumb"><a href="#"><img src="images/home/home1/3Laptop.png" alt="" /></a></div>
						<div class="banner-info text-center black text-uppercase animated" data-animated="zoomIn">
							<div class="container">
							

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
							<a href="#" class="adv-thumb-link"><img src="images/home/home1/adPC.png" alt="" /></a>
							
						</div>
					</div>
					<div class="col-md-3 col-sm-6 col-xs-12">
						<div class="item-adv1 banner-adv zoom-image">
							<a href="#" class="adv-thumb-link"><img src="images/home/home1/adLapGaming.jpg" alt="" /></a>
							
						</div>
					</div>
					<div class="col-md-3 col-sm-6 col-xs-12">
						<div class="item-adv1 banner-adv zoom-image">
							<a href="#" class="adv-thumb-link"><img src="images/home/home1/adLapOffice.jpg" alt="" /></a>
							
						</div>
					</div>
					<div class="col-md-3 col-sm-6 col-xs-12">
						<div class="item-adv1 banner-adv zoom-image">
							<a href="#" class="adv-thumb-link"><img src="images/home/home1/adMouse.jpg" alt="" /></a>
							<div class="banner-info">
							
			
							</div>
						</div>
					</div>
				</div>
			</div>
			<!-- End Adv -->
			<div class="block-product1">
				<h2 class="title18 crim-font title-box1 font-bold text-uppercase"><i class="fa fa-flash"></i> PC</h2>
				<div class="product-slider">
					<div class="wrap-item group-navi rect-navi" data-pagination="false" data-navigation="true" data-itemscustom="[[0,1],[560,2],[768,3],[990,4],[1200,5]]">
					@if($bestSellingPCGaming==null)
    <p>No best-selling gaming PCs available at the moment.</p>
@else
    @foreach ($bestSellingPCGaming as $Pc)
        <div class="item-product item-product1">
            <div class="product-thumb">
                <a href="/product-detail/{{$Pc->id}}" class="product-thumb-link zoom-thumb">
                    <img src="{{$Pc->image_path}}" alt="" />
                </a>
               
            </div>
            <div class="product-info">
                <div class="product-price">
                    <ins class="color title18 font-bold">$ {{$Pc->sale_price}}</ins>
                </div>
                <h3 class="title18 crim-font product-title">
                    <a href="/product-detail/{{$Pc->id}}" class="black">{{ $Pc->product_name }}</a>
                </h3>
                <a href="#" class="cat-parent silver"> <span class="title10 silver"></span></a>
                <div class="product-extra-link">
                    <form action="{{ route('cart.add', $Pc->id) }}" method="POST">
                        @csrf
                        <button type="submit" class="btn btn-primary">Add to Cart</button>
                    </form>
                </div>
            </div>
        </div>
    @endforeach
@endif

					</div>
				</div>
			</div>
			<!-- End Block Product -->
			<div class="list-product-adv1">
				<div class="row">
					<div class="col-md-6 col-sm-6 col-xs-12">
						<div class="banner-adv fade-out-in">
							<a href="#" class="adv-thumb-link"><img src="images/home/home1/bnPC.jpg" alt="" /></a>
						</div>
					</div>
					<div class="col-md-6 col-sm-6 col-xs-12">
						<div class="banner-adv fade-out-in">
							<a href="#" class="adv-thumb-link"><img src="images/home/home1/bnAccessories.jpg" alt="" /></a>
						</div>
					</div>
				</div>
			</div>
			<!-- End Product Adv -->
			<div class="block-product1">
				<h2 class="title18 crim-font title-box1 font-bold text-uppercase"><i class="fa fa-flash"></i>Laptop</h2>
				<div class="product-slider">
					<div class="wrap-item group-navi rect-navi" data-pagination="false" data-navigation="true" data-itemscustom="[[0,1],[560,2],[768,3],[990,4],[1200,5]]">
					@if($bestSellingLapTop==null)
    		<p>No best-selling laptops available at the moment.</p>
			@else
				@foreach ($bestSellingLapTop as $Pc)
					<div class="item-product item-product1">
						<div class="product-thumb">
							<a href="/product-detail/{{$Pc->id}}" class="product-thumb-link zoom-thumb">
								<img src="{{$Pc->image_path}}" alt="" />
							</a>
						</div>
						<div class="product-info">
							<div class="product-price">
								<ins class="color title18 font-bold">$ {{$Pc->sale_price}}</ins>
							</div>
							<h3 class="title18 crim-font product-title">
								<a href="product-detail.html" class="black">{{ $Pc->product_name }}</a>
							</h3>
						</div>
						<div class="product-extra-link">
							<form action="{{ route('cart.add', $Pc->id) }}" method="POST">
								@csrf
								<button type="submit" class="btn btn-primary">Add to Cart</button>
							</form>
							
						</div>
					</div>
				@endforeach
@endif

					</div>
				</div>
			</div>
			<!-- End Block Product -->
			<div class="list-product-adv1">
				<div class="row">
					<div class="col-md-6 col-sm-6 col-xs-12">
						<div class="banner-adv fade-out-in">
							<a href="#" class="adv-thumb-link"><img src="images/home/home1/bnTopSellers.jpg" alt="" /></a>
						</div>
					</div>
					<div class="col-md-6 col-sm-6 col-xs-12">
						<div class="banner-adv fade-out-in">
							<a href="#" class="adv-thumb-link"><img src="images/home/home1/bnSale.png" alt="" /></a>
						</div>
					</div>
				</div>
			</div>
			<!-- End Product Adv -->
			<!-- End Store -->
			<div class="banner-adv adv-collect1 zoom-image fade-in-out">
				<a href="#" class="adv-thumb-link"><img src="images/home/home1/bnCollection.jpg" alt="" /></a>
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