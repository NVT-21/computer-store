

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
								<h3 class="title30 crim-font font-bold">Fashion & Live</h3>
								<h2 class="title48 crim-font font-bold color">women’s</h2>
								<h3 class="title30 crim-font font-bold">new collection</h3>
								<a href="#" class="shop-button bg-white">Shop now</a>
							</div>
						</div>
					</div>
					<div class="item-slider item-slider1">
						<div class="banner-thumb"><a href="#"><img src="images/home/home1/slide2.jpg" alt="" /></a></div>
						<div class="banner-info text-center black text-uppercase animated" data-animated="zoomIn">
							<div class="container">
								<h3 class="title30 crim-font font-bold">love summer</h3>
								<h2 class="title48 crim-font font-bold color">fashion</h2>
								<h3 class="title30 crim-font font-bold">up to 60% off</h3>
								<a href="#" class="shop-button bg-white">Shop now</a>
							</div>
						</div>
					</div>
					<div class="item-slider item-slider1">
						<div class="banner-thumb"><a href="#"><img src="images/home/home1/slide3.jpg" alt="" /></a></div>
						<div class="banner-info text-center black text-uppercase animated" data-animated="zoomIn">
							<div class="container">
								<h3 class="title30 crim-font font-bold">collection summer</h3>
								<h2 class="title48 crim-font font-bold color">clothing</h2>
								<h3 class="title30 crim-font font-bold">for kids</h3>
								<a href="#" class="shop-button bg-white">Shop now</a>
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
								<h3 class="title18 text-uppercase font-bold crim-font">fashion</h3>
								<p class="desc black">Up to <span class="title18 font-bold color">50% off</span></p>
							</div>
						</div>
					</div>
					<div class="col-md-3 col-sm-6 col-xs-12">
						<div class="item-adv1 banner-adv zoom-image">
							<a href="#" class="adv-thumb-link"><img src="images/home/home1/ad2.jpg" alt="" /></a>
							<div class="banner-info">
								<h3 class="title18 text-uppercase font-bold crim-font">beauty</h3>
								<p class="desc black">From <span class="title18 font-bold color">$19.00</span></p>
							</div>
						</div>
					</div>
					<div class="col-md-3 col-sm-6 col-xs-12">
						<div class="item-adv1 banner-adv zoom-image">
							<a href="#" class="adv-thumb-link"><img src="images/home/home1/ad3.jpg" alt="" /></a>
							<div class="banner-info">
								<h3 class="title18 text-uppercase font-bold crim-font">Smartphone</h3>
								<p class="desc black">From <span class="title18 font-bold color">$359.00</span></p>
							</div>
						</div>
					</div>
					<div class="col-md-3 col-sm-6 col-xs-12">
						<div class="item-adv1 banner-adv zoom-image">
							<a href="#" class="adv-thumb-link"><img src="images/home/home1/ad4.jpg" alt="" /></a>
							<div class="banner-info">
								<h3 class="title18 text-uppercase font-bold crim-font">Bella</h3>
								<p class="desc black">Vince Camuto</p>
							</div>
						</div>
					</div>
				</div>
			</div>
			<!-- End Adv -->
			<div class="block-product1">
				<h2 class="title18 crim-font title-box1 font-bold text-uppercase"><i class="fa fa-flash"></i>New Arrivals</h2>
				<div class="product-slider">
					<div class="wrap-item group-navi rect-navi" data-pagination="false" data-navigation="true" data-itemscustom="[[0,1],[560,2],[768,3],[990,4],[1200,5]]">
						<div class="item-product item-product1">
							<div class="product-thumb">
								<a href="#" class="product-thumb-link zoom-thumb"><img src="images/product/fashion/marketsale-watch-01.jpg" alt="" /></a>
								<a href="quick-view.html" class="quickview-link fancybox.iframe"><i class="fa fa-search"></i></a>
							</div>
							<div class="product-info">
								<div class="product-price">
									<ins class="color title18 font-bold">$359.00</ins>
								</div>
								<h3 class="title18 crim-font product-title"><a href="product-detail.html" class="black">Aztheme Product</a></h3>
								<a href="#" class="cat-parent silver">Fashion <span class="title10 silver">(8)</span></a>
								<div class="product-extra-link">
									<a href="#" class="addcart-link">Add to Cart</a>
									<a href="#" class="wishlist-link"><i class="fa fa-heart"></i></a>
									<a href="compare-product.html" class="compare-link fancybox fancybox.iframe"><i class="fa fa-refresh"></i></a>
								</div>
							</div>
						</div>
						<div class="item-product item-product1 item-product-onsale">
							<div class="product-thumb">
								<a href="#" class="product-thumb-link zoom-thumb"><img src="images/product/furniture/marketsale-furniture-09.jpg" alt="" /></a>
								<a href="quick-view.html" class="quickview-link fancybox.iframe"><i class="fa fa-search"></i></a>
							</div>
							<div class="product-info">
								<div class="product-price">
									<del class="silver">$718.00</del>
									<ins class="color title18 font-bold">$359.00</ins>
									<label class="percent-sale">-50%</label>
								</div>
								<h3 class="title18 crim-font product-title"><a href="product-detail.html" class="black">Aztheme Product</a></h3>
								<a href="#" class="cat-parent silver">Fashion <span class="title10 silver">(8)</span></a>
								<div class="product-extra-link">
									<a href="#" class="addcart-link">Add to Cart</a>
									<a href="#" class="wishlist-link"><i class="fa fa-heart"></i></a>
									<a href="compare-product.html" class="compare-link fancybox fancybox.iframe"><i class="fa fa-refresh"></i></a>
								</div>
							</div>
						</div>
						<div class="item-product item-product1">
							<div class="product-thumb">
								<a href="#" class="product-thumb-link zoom-thumb"><img src="images/product/beauty/marketsale-beauty-09.jpg" alt="" /></a>
								<a href="quick-view.html" class="quickview-link fancybox.iframe"><i class="fa fa-search"></i></a>
							</div>
							<div class="product-info">
								<div class="product-price">
									<ins class="color title18 font-bold">$359.00</ins>
								</div>
								<h3 class="title18 crim-font product-title"><a href="product-detail.html" class="black">Aztheme Product</a></h3>
								<a href="#" class="cat-parent silver">Fashion <span class="title10 silver">(8)</span></a>
								<div class="product-extra-link">
									<a href="#" class="addcart-link">Add to Cart</a>
									<a href="#" class="wishlist-link"><i class="fa fa-heart"></i></a>
									<a href="compare-product.html" class="compare-link fancybox fancybox.iframe"><i class="fa fa-refresh"></i></a>
								</div>
							</div>
						</div>
						<div class="item-product item-product1">
							<div class="product-thumb">
								<a href="#" class="product-thumb-link zoom-thumb"><img src="images/product/furniture/marketsale-furniture-12.jpg" alt="" /></a>
								<a href="quick-view.html" class="quickview-link fancybox.iframe"><i class="fa fa-search"></i></a>
							</div>
							<div class="product-info">
								<div class="product-price">
									<ins class="color title18 font-bold">$359.00</ins>
								</div>
								<h3 class="title18 crim-font product-title"><a href="product-detail.html" class="black">Aztheme Product</a></h3>
								<a href="#" class="cat-parent silver">Fashion <span class="title10 silver">(8)</span></a>
								<div class="product-extra-link">
									<a href="#" class="addcart-link">Add to Cart</a>
									<a href="#" class="wishlist-link"><i class="fa fa-heart"></i></a>
									<a href="compare-product.html" class="compare-link fancybox fancybox.iframe"><i class="fa fa-refresh"></i></a>
								</div>
							</div>
						</div>
						<div class="item-product item-product1">
							<div class="product-thumb">
								<a href="#" class="product-thumb-link zoom-thumb"><img src="images/product/furniture/marketsale-furniture-06.jpg" alt="" /></a>
								<a href="quick-view.html" class="quickview-link fancybox.iframe"><i class="fa fa-search"></i></a>
							</div>
							<div class="product-info">
								<div class="product-price">
									<ins class="color title18 font-bold">$359.00</ins>
								</div>
								<h3 class="title18 crim-font product-title"><a href="product-detail.html" class="black">Aztheme Product</a></h3>
								<a href="#" class="cat-parent silver">Fashion <span class="title10 silver">(8)</span></a>
								<div class="product-extra-link">
									<a href="#" class="addcart-link">Add to Cart</a>
									<a href="#" class="wishlist-link"><i class="fa fa-heart"></i></a>
									<a href="compare-product.html" class="compare-link fancybox fancybox.iframe"><i class="fa fa-refresh"></i></a>
								</div>
							</div>
						</div>
						<div class="item-product item-product1">
							<div class="product-thumb">
								<a href="#" class="product-thumb-link zoom-thumb"><img src="images/product/furniture/marketsale-furniture-05.jpg" alt="" /></a>
								<a href="quick-view.html" class="quickview-link fancybox.iframe"><i class="fa fa-search"></i></a>
							</div>
							<div class="product-info">
								<div class="product-price">
									<ins class="color title18 font-bold">$359.00</ins>
								</div>
								<h3 class="title18 crim-font product-title"><a href="product-detail.html" class="black">Aztheme Product</a></h3>
								<a href="#" class="cat-parent silver">Fashion <span class="title10 silver">(8)</span></a>
								<div class="product-extra-link">
									<a href="#" class="addcart-link">Add to Cart</a>
									<a href="#" class="wishlist-link"><i class="fa fa-heart"></i></a>
									<a href="compare-product.html" class="compare-link fancybox fancybox.iframe"><i class="fa fa-refresh"></i></a>
								</div>
							</div>
						</div>
						<div class="item-product item-product1">
							<div class="product-thumb">
								<a href="#" class="product-thumb-link zoom-thumb"><img src="images/product/furniture/marketsale-furniture-04.jpg" alt="" /></a>
								<a href="quick-view.html" class="quickview-link fancybox.iframe"><i class="fa fa-search"></i></a>
							</div>
							<div class="product-info">
								<div class="product-price">
									<ins class="color title18 font-bold">$359.00</ins>
								</div>
								<h3 class="title18 crim-font product-title"><a href="product-detail.html" class="black">Aztheme Product</a></h3>
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
				<h2 class="title18 crim-font title-box1 font-bold text-uppercase"><i class="fa fa-flash"></i>best sellers</h2>
				<div class="product-slider">
					<div class="wrap-item group-navi rect-navi" data-pagination="false" data-navigation="true" data-itemscustom="[[0,1],[560,2],[768,3],[990,4],[1200,5]]">
						<div class="item-product item-product1">
							<div class="product-thumb">
								<a href="#" class="product-thumb-link zoom-thumb"><img src="images/product/beauty/marketsale-beauty-14.jpg" alt="" /></a>
								<a href="quick-view.html" class="quickview-link fancybox.iframe"><i class="fa fa-search"></i></a>
							</div>
							<div class="product-info">
								<div class="product-price">
									<ins class="color title18 font-bold">$359.00</ins>
								</div>
								<h3 class="title18 crim-font product-title"><a href="product-detail.html" class="black">Aztheme Product</a></h3>
								<a href="#" class="cat-parent silver">Fashion <span class="title10 silver">(8)</span></a>
							</div>
							<div class="product-extra-link">
								<a href="#" class="addcart-link">Add to Cart</a>
								<a href="#" class="wishlist-link"><i class="fa fa-heart"></i></a>
								<a href="compare-product.html" class="compare-link fancybox fancybox.iframe"><i class="fa fa-refresh"></i></a>
							</div>
						</div>
						<div class="item-product item-product1 item-product-onsale">
							<div class="product-thumb">
								<a href="#" class="product-thumb-link zoom-thumb"><img src="images/product/beauty/marketsale-beauty-12.jpg" alt="" /></a>
								<a href="quick-view.html" class="quickview-link fancybox.iframe"><i class="fa fa-search"></i></a>
							</div>
							<div class="product-info">
								<div class="product-price">
									<del class="silver">$718.00</del>
									<ins class="color title18 font-bold">$359.00</ins>
									<label class="percent-sale">-50%</label>
								</div>
								<h3 class="title18 crim-font product-title"><a href="product-detail.html" class="black">Aztheme Product</a></h3>
								<a href="#" class="cat-parent silver">Fashion <span class="title10 silver">(8)</span></a>
							</div>
							<div class="product-extra-link">
								<a href="#" class="addcart-link">Add to Cart</a>
								<a href="#" class="wishlist-link"><i class="fa fa-heart"></i></a>
								<a href="compare-product.html" class="compare-link fancybox fancybox.iframe"><i class="fa fa-refresh"></i></a>
							</div>
						</div>
						<div class="item-product item-product1">
							<div class="product-thumb">
								<a href="#" class="product-thumb-link zoom-thumb"><img src="images/product/beauty/marketsale-beauty-03.jpg" alt="" /></a>
								<a href="quick-view.html" class="quickview-link fancybox.iframe"><i class="fa fa-search"></i></a>
							</div>
							<div class="product-info">
								<div class="product-price">
									<ins class="color title18 font-bold">$359.00</ins>
								</div>
								<h3 class="title18 crim-font product-title"><a href="product-detail.html" class="black">Aztheme Product</a></h3>
								<a href="#" class="cat-parent silver">Fashion <span class="title10 silver">(8)</span></a>
							</div>
							<div class="product-extra-link">
								<a href="#" class="addcart-link">Add to Cart</a>
								<a href="#" class="wishlist-link"><i class="fa fa-heart"></i></a>
								<a href="compare-product.html" class="compare-link fancybox fancybox.iframe"><i class="fa fa-refresh"></i></a>
							</div>
						</div>
						<div class="item-product item-product1">
							<div class="product-thumb">
								<a href="#" class="product-thumb-link zoom-thumb"><img src="images/product/beauty/marketsale-beauty-01.jpg" alt="" /></a>
								<a href="quick-view.html" class="quickview-link fancybox.iframe"><i class="fa fa-search"></i></a>
							</div>
							<div class="product-info">
								<div class="product-price">
									<ins class="color title18 font-bold">$359.00</ins>
								</div>
								<h3 class="title18 crim-font product-title"><a href="product-detail.html" class="black">Aztheme Product</a></h3>
								<a href="#" class="cat-parent silver">Fashion <span class="title10 silver">(8)</span></a>
							</div>
							<div class="product-extra-link">
								<a href="#" class="addcart-link">Add to Cart</a>
								<a href="#" class="wishlist-link"><i class="fa fa-heart"></i></a>
								<a href="compare-product.html" class="compare-link fancybox fancybox.iframe"><i class="fa fa-refresh"></i></a>
							</div>
						</div>
						<div class="item-product item-product1">
							<div class="product-thumb">
								<a href="#" class="product-thumb-link zoom-thumb"><img src="images/product/jewelry/market-jewelry-01.jpg" alt="" /></a>
								<a href="quick-view.html" class="quickview-link fancybox.iframe"><i class="fa fa-search"></i></a>
							</div>
							<div class="product-info">
								<div class="product-price">
									<ins class="color title18 font-bold">$359.00</ins>
								</div>
								<h3 class="title18 crim-font product-title"><a href="product-detail.html" class="black">Aztheme Product</a></h3>
								<a href="#" class="cat-parent silver">Fashion <span class="title10 silver">(8)</span></a>
							</div>
							<div class="product-extra-link">
								<a href="#" class="addcart-link">Add to Cart</a>
								<a href="#" class="wishlist-link"><i class="fa fa-heart"></i></a>
								<a href="compare-product.html" class="compare-link fancybox fancybox.iframe"><i class="fa fa-refresh"></i></a>
							</div>
						</div>
						<div class="item-product item-product1">
							<div class="product-thumb">
								<a href="#" class="product-thumb-link zoom-thumb"><img src="images/product/jewelry/market-jewelry-02.jpg" alt="" /></a>
								<a href="quick-view.html" class="quickview-link fancybox.iframe"><i class="fa fa-search"></i></a>
							</div>
							<div class="product-info">
								<div class="product-price">
									<ins class="color title18 font-bold">$359.00</ins>
								</div>
								<h3 class="title18 crim-font product-title"><a href="product-detail.html" class="black">Aztheme Product</a></h3>
								<a href="#" class="cat-parent silver">Fashion <span class="title10 silver">(8)</span></a>
							</div>
							<div class="product-extra-link">
								<a href="#" class="addcart-link">Add to Cart</a>
								<a href="#" class="wishlist-link"><i class="fa fa-heart"></i></a>
								<a href="compare-product.html" class="compare-link fancybox fancybox.iframe"><i class="fa fa-refresh"></i></a>
							</div>
						</div>
						<div class="item-product item-product1">
							<div class="product-thumb">
								<a href="#" class="product-thumb-link zoom-thumb"><img src="images/product/furniture/marketsale-furniture-04.jpg" alt="" /></a>
								<a href="quick-view.html" class="quickview-link fancybox.iframe"><i class="fa fa-search"></i></a>
							</div>
							<div class="product-info">
								<div class="product-price">
									<ins class="color title18 font-bold">$359.00</ins>
								</div>
								<h3 class="title18 crim-font product-title"><a href="product-detail.html" class="black">Aztheme Product</a></h3>
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
			<div class="product-tab-store">
				<h2 class="title18 crim-font title-box1 font-bold text-uppercase">TOP STORES</h2>
				<ul class="list-inline-block list-tab-brand">
					<li class="active"><a href="#tab1" data-toggle="tab"><img src="images/brand/general/br1.png" alt="" /></a></li>
					<li><a href="#tab2" data-toggle="tab"><img src="images/brand/general/br13.png" alt="" /></a></li>
					<li><a href="#tab1" data-toggle="tab"><img src="images/brand/general/br5.png" alt="" /></a></li>
					<li><a href="#tab2" data-toggle="tab"><img src="images/brand/general/br12.png" alt="" /></a></li>
					<li><a href="#tab1" data-toggle="tab"><img src="images/brand/general/br7.png" alt="" /></a></li>
				</ul>
				<div class="tab-content">
					<div id="tab1" class="tab-pane active">
						<div class="list-product-table1">
							<div class="item-product table-custom">
								<div class="product-thumb">
									<a href="#" class="product-thumb-link zoom-thumb"><img src="images/product/fashion/marketsale-fashion-08.png" alt="" /></a>
								</div>
								<div class="product-info">
									<div class="product-price">
										<del class="silver">$718.00</del>
										<ins class="color title18 font-bold">$359.00</ins>
									</div>
									<h3 class="title18 crim-font product-title"><a href="product-detail.html" class="black">Aztheme Product</a></h3>
									<a href="#" class="cat-parent silver">Fashion <span class="title10 silver">(22)</span></a>
								</div>
							</div>
							<div class="item-product table-custom item-product-onsale">
								<div class="product-thumb">
									<a href="#" class="product-thumb-link zoom-thumb"><img src="images/product/fashion/marketsale-fashion-07.png" alt="" /></a>
								</div>
								<div class="product-info">
									<div class="product-price">
										<del class="silver">$718.00</del>
										<ins class="color title18 font-bold">$359.00</ins>
										<label class="percent-sale">-50%</label>
									</div>
									<h3 class="title18 crim-font product-title"><a href="product-detail.html" class="black">Aztheme Product</a></h3>
									<a href="#" class="cat-parent silver">Fashion <span class="title10 silver">(22)</span></a>
								</div>
							</div>
							<div class="item-product table-custom item-product-onsale">
								<div class="product-thumb">
									<a href="#" class="product-thumb-link zoom-thumb"><img src="images/product/fashion/marketsale-fashion-09.png" alt="" /></a>
								</div>
								<div class="product-info">
									<div class="product-price">
										<del class="silver">$718.00</del>
										<ins class="color title18 font-bold">$359.00</ins>
										<label class="percent-sale">-50%</label>
									</div>
									<h3 class="title18 crim-font product-title"><a href="product-detail.html" class="black">Aztheme Product</a></h3>
									<a href="#" class="cat-parent silver">Fashion <span class="title10 silver">(22)</span></a>
								</div>
							</div>
							<div class="item-product table-custom">
								<div class="product-thumb">
									<a href="#" class="product-thumb-link zoom-thumb"><img src="images/product/fashion/marketsale-fashion-13.png" alt="" /></a>
								</div>
								<div class="product-info">
									<div class="product-price">
										<del class="silver">$718.00</del>
										<ins class="color title18 font-bold">$359.00</ins>
									</div>
									<h3 class="title18 crim-font product-title"><a href="product-detail.html" class="black">Aztheme Product</a></h3>
									<a href="#" class="cat-parent silver">Fashion <span class="title10 silver">(22)</span></a>
								</div>
							</div>
							<div class="item-product table-custom item-product-onsale">
								<div class="product-thumb">
									<a href="#" class="product-thumb-link zoom-thumb"><img src="images/product/fashion/marketsale-fashion-04.jpg" alt="" /></a>
								</div>
								<div class="product-info">
									<div class="product-price">
										<del class="silver">$718.00</del>
										<ins class="color title18 font-bold">$359.00</ins>
										<label class="percent-sale">-50%</label>
									</div>
									<h3 class="title18 crim-font product-title"><a href="product-detail.html" class="black">Aztheme Product</a></h3>
									<a href="#" class="cat-parent silver">Fashion <span class="title10 silver">(22)</span></a>
								</div>
							</div>
							<div class="item-product table-custom item-product-onsale">
								<div class="product-thumb">
									<a href="#" class="product-thumb-link zoom-thumb"><img src="images/product/fashion/marketsale-fashion-01.jpg" alt="" /></a>
								</div>
								<div class="product-info">
									<div class="product-price">
										<del class="silver">$718.00</del>
										<ins class="color title18 font-bold">$359.00</ins>
										<label class="percent-sale">-50%</label>
									</div>
									<h3 class="title18 crim-font product-title"><a href="product-detail.html" class="black">Aztheme Product</a></h3>
									<a href="#" class="cat-parent silver">Fashion <span class="title10 silver">(22)</span></a>
								</div>
							</div>
							<div class="item-product table-custom item-product-onsale">
								<div class="product-thumb">
									<a href="#" class="product-thumb-link zoom-thumb"><img src="images/product/fashion/marketsale-fashion-02.jpg" alt="" /></a>
								</div>
								<div class="product-info">
									<div class="product-price">
										<del class="silver">$718.00</del>
										<ins class="color title18 font-bold">$359.00</ins>
										<label class="percent-sale">-50%</label>
									</div>
									<h3 class="title18 crim-font product-title"><a href="product-detail.html" class="black">Aztheme Product</a></h3>
									<a href="#" class="cat-parent silver">Fashion <span class="title10 silver">(22)</span></a>
								</div>
							</div>
							<div class="item-product table-custom item-product-onsale">
								<div class="product-thumb">
									<a href="#" class="product-thumb-link zoom-thumb"><img src="images/product/fashion/marketsale-fashion-03.jpg" alt="" /></a>
								</div>
								<div class="product-info">
									<div class="product-price">
										<del class="silver">$718.00</del>
										<ins class="color title18 font-bold">$359.00</ins>
										<label class="percent-sale">-50%</label>
									</div>
									<h3 class="title18 crim-font product-title"><a href="product-detail.html" class="black">Aztheme Product</a></h3>
									<a href="#" class="cat-parent silver">Fashion <span class="title10 silver">(22)</span></a>
								</div>
							</div>
							<div class="item-product table-custom item-product-onsale">
								<div class="product-thumb">
									<a href="#" class="product-thumb-link zoom-thumb"><img src="images/product/fashion/marketsale-fashion-05.jpg" alt="" /></a>
								</div>
								<div class="product-info">
									<div class="product-price">
										<del class="silver">$718.00</del>
										<ins class="color title18 font-bold">$359.00</ins>
										<label class="percent-sale">-50%</label>
									</div>
									<h3 class="title18 crim-font product-title"><a href="product-detail.html" class="black">Aztheme Product</a></h3>
									<a href="#" class="cat-parent silver">Fashion <span class="title10 silver">(22)</span></a>
								</div>
							</div>
						</div>
					</div>
					<!-- End Tab -->
					<div id="tab2" class="tab-pane">
						<div class="list-product-table1">
							<div class="item-product table-custom">
								<div class="product-thumb">
									<a href="#" class="product-thumb-link zoom-thumb"><img src="images/product/food/marketsale-food-01.jpg" alt="" /></a>
								</div>
								<div class="product-info">
									<div class="product-price">
										<del class="silver">$718.00</del>
										<ins class="color title18 font-bold">$359.00</ins>
									</div>
									<h3 class="title18 crim-font product-title"><a href="product-detail.html" class="black">Aztheme Product</a></h3>
									<a href="#" class="cat-parent silver">Fashion <span class="title10 silver">(22)</span></a>
								</div>
							</div>
							<div class="item-product table-custom item-product-onsale">
								<div class="product-thumb">
									<a href="#" class="product-thumb-link zoom-thumb"><img src="images/product/food/marketsale-food-02.jpg" alt="" /></a>
								</div>
								<div class="product-info">
									<div class="product-price">
										<del class="silver">$718.00</del>
										<ins class="color title18 font-bold">$359.00</ins>
										<label class="percent-sale">-50%</label>
									</div>
									<h3 class="title18 crim-font product-title"><a href="product-detail.html" class="black">Aztheme Product</a></h3>
									<a href="#" class="cat-parent silver">Fashion <span class="title10 silver">(22)</span></a>
								</div>
							</div>
							<div class="item-product table-custom item-product-onsale">
								<div class="product-thumb">
									<a href="#" class="product-thumb-link zoom-thumb"><img src="images/product/food/marketsale-food-03.jpg" alt="" /></a>
								</div>
								<div class="product-info">
									<div class="product-price">
										<del class="silver">$718.00</del>
										<ins class="color title18 font-bold">$359.00</ins>
										<label class="percent-sale">-50%</label>
									</div>
									<h3 class="title18 crim-font product-title"><a href="product-detail.html" class="black">Aztheme Product</a></h3>
									<a href="#" class="cat-parent silver">Fashion <span class="title10 silver">(22)</span></a>
								</div>
							</div>
							<div class="item-product table-custom">
								<div class="product-thumb">
									<a href="#" class="product-thumb-link zoom-thumb"><img src="images/product/food/marketsale-food-04.jpg" alt="" /></a>
								</div>
								<div class="product-info">
									<div class="product-price">
										<del class="silver">$718.00</del>
										<ins class="color title18 font-bold">$359.00</ins>
									</div>
									<h3 class="title18 crim-font product-title"><a href="product-detail.html" class="black">Aztheme Product</a></h3>
									<a href="#" class="cat-parent silver">Fashion <span class="title10 silver">(22)</span></a>
								</div>
							</div>
							<div class="item-product table-custom item-product-onsale">
								<div class="product-thumb">
									<a href="#" class="product-thumb-link zoom-thumb"><img src="images/product/food/marketsale-food-05.jpg" alt="" /></a>
								</div>
								<div class="product-info">
									<div class="product-price">
										<del class="silver">$718.00</del>
										<ins class="color title18 font-bold">$359.00</ins>
										<label class="percent-sale">-50%</label>
									</div>
									<h3 class="title18 crim-font product-title"><a href="product-detail.html" class="black">Aztheme Product</a></h3>
									<a href="#" class="cat-parent silver">Fashion <span class="title10 silver">(22)</span></a>
								</div>
							</div>
							<div class="item-product table-custom item-product-onsale">
								<div class="product-thumb">
									<a href="#" class="product-thumb-link zoom-thumb"><img src="images/product/food/marketsale-food-06.jpg" alt="" /></a>
								</div>
								<div class="product-info">
									<div class="product-price">
										<del class="silver">$718.00</del>
										<ins class="color title18 font-bold">$359.00</ins>
										<label class="percent-sale">-50%</label>
									</div>
									<h3 class="title18 crim-font product-title"><a href="product-detail.html" class="black">Aztheme Product</a></h3>
									<a href="#" class="cat-parent silver">Fashion <span class="title10 silver">(22)</span></a>
								</div>
							</div>
							<div class="item-product table-custom item-product-onsale">
								<div class="product-thumb">
									<a href="#" class="product-thumb-link zoom-thumb"><img src="images/product/food/marketsale-food-07.jpg" alt="" /></a>
								</div>
								<div class="product-info">
									<div class="product-price">
										<del class="silver">$718.00</del>
										<ins class="color title18 font-bold">$359.00</ins>
										<label class="percent-sale">-50%</label>
									</div>
									<h3 class="title18 crim-font product-title"><a href="product-detail.html" class="black">Aztheme Product</a></h3>
									<a href="#" class="cat-parent silver">Fashion <span class="title10 silver">(22)</span></a>
								</div>
							</div>
							<div class="item-product table-custom item-product-onsale">
								<div class="product-thumb">
									<a href="#" class="product-thumb-link zoom-thumb"><img src="images/product/food/marketsale-food-08.jpg" alt="" /></a>
								</div>
								<div class="product-info">
									<div class="product-price">
										<del class="silver">$718.00</del>
										<ins class="color title18 font-bold">$359.00</ins>
										<label class="percent-sale">-50%</label>
									</div>
									<h3 class="title18 crim-font product-title"><a href="product-detail.html" class="black">Aztheme Product</a></h3>
									<a href="#" class="cat-parent silver">Fashion <span class="title10 silver">(22)</span></a>
								</div>
							</div>
							<div class="item-product table-custom item-product-onsale">
								<div class="product-thumb">
									<a href="#" class="product-thumb-link zoom-thumb"><img src="images/product/food/marketsale-food-09.jpg" alt="" /></a>
								</div>
								<div class="product-info">
									<div class="product-price">
										<del class="silver">$718.00</del>
										<ins class="color title18 font-bold">$359.00</ins>
										<label class="percent-sale">-50%</label>
									</div>
									<h3 class="title18 crim-font product-title"><a href="product-detail.html" class="black">Aztheme Product</a></h3>
									<a href="#" class="cat-parent silver">Fashion <span class="title10 silver">(22)</span></a>
								</div>
							</div>
						</div>
					</div>
					<!-- End Tab -->
				</div>
			</div>
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
			<div class="list-cat-slider1">
				<div class="wrap-item" data-itemscustom="[[0,1],[560,2],[768,3],[990,4]]">
					<div class="item-list-cat1">
						<h2 class="title18 crim-font font-bold text-uppercase"><i class="color title14 fa fa-pagelines"></i> bEAUTY</h2>
						<ul class="list-none">
							<li>
								<div class="item-product table-custom item-product-onsale">
									<div class="product-thumb">
										<a href="#" class="product-thumb-link zoom-thumb"><img src="images/product/beauty/marketsale-beauty-01.jpg" alt="" /></a>
									</div>
									<div class="product-info">
										<div class="product-price">
											<del class="silver">$718.00</del>
											<ins class="color title18 font-bold">$359.00</ins>
											<label class="percent-sale">-50%</label>
										</div>
										<h3 class="title18 crim-font product-title"><a href="product-detail.html" class="black">Aztheme Product</a></h3>
									</div>
								</div>
							</li>
							<li>
								<div class="item-product table-custom">
									<div class="product-thumb">
										<a href="#" class="product-thumb-link zoom-thumb"><img src="images/product/beauty/marketsale-beauty-08.jpg" alt="" /></a>
									</div>
									<div class="product-info">
										<div class="product-price">
											<ins class="color title18 font-bold">$359.00</ins>
										</div>
										<h3 class="title18 crim-font product-title"><a href="product-detail.html" class="black">Aztheme Product</a></h3>
									</div>
								</div>
							</li>
							<li>
								<div class="item-product table-custom item-product-onsale">
									<div class="product-thumb">
										<a href="#" class="product-thumb-link zoom-thumb"><img src="images/product/beauty/marketsale-beauty-11.jpg" alt="" /></a>
									</div>
									<div class="product-info">
										<div class="product-price">
											<del class="silver">$718.00</del>
											<ins class="color title18 font-bold">$359.00</ins>
											<label class="percent-sale">-50%</label>
										</div>
										<h3 class="title18 crim-font product-title"><a href="product-detail.html" class="black">Aztheme Product</a></h3>
									</div>
								</div>
							</li>
						</ul>
						<a href="#" class="bg-gray color viewall border"><i class="fa fa-plus-square-o"></i> <span class="black">View All Beauty</span></a>
					</div>
					<!-- End List -->
					<div class="item-list-cat1">
						<h2 class="title18 crim-font font-bold text-uppercase"><i class="color title14 fa fa-coffee"></i> food & drink</h2>
						<ul class="list-none">
							<li>
								<div class="item-product table-custom">
									<div class="product-thumb">
										<a href="#" class="product-thumb-link zoom-thumb"><img src="images/product/food/marketsale-food-01.jpg" alt="" /></a>
									</div>
									<div class="product-info">
										<div class="product-price">
											<ins class="color title18 font-bold">$359.00</ins>
										</div>
										<h3 class="title18 crim-font product-title"><a href="product-detail.html" class="black">Aztheme Product</a></h3>
									</div>
								</div>
							</li>
							<li>
								<div class="item-product table-custom">
									<div class="product-thumb">
										<a href="#" class="product-thumb-link zoom-thumb"><img src="images/product/food/marketsale-food-02.jpg" alt="" /></a>
									</div>
									<div class="product-info">
										<div class="product-price">
											<ins class="color title18 font-bold">$359.00</ins>
										</div>
										<h3 class="title18 crim-font product-title"><a href="product-detail.html" class="black">Aztheme Product</a></h3>
									</div>
								</div>
							</li>
							<li>
								<div class="item-product table-custom">
									<div class="product-thumb">
										<a href="#" class="product-thumb-link zoom-thumb"><img src="images/product/food/marketsale-food-03.jpg" alt="" /></a>
									</div>
									<div class="product-info">
										<div class="product-price">
											<ins class="color title18 font-bold">$359.00</ins>
										</div>
										<h3 class="title18 crim-font product-title"><a href="product-detail.html" class="black">Aztheme Product</a></h3>
									</div>
								</div>
							</li>
						</ul>
						<a href="#" class="bg-gray color viewall border"><i class="fa fa-plus-square-o"></i> <span class="black">View All Food & Drink</span></a>
					</div>
					<!-- End List -->
					<div class="item-list-cat1">
						<h2 class="title18 crim-font font-bold text-uppercase"><i class="color title14 fa fa-female"></i> fashion</h2>
						<ul class="list-none">
							<li>
								<div class="item-product table-custom">
									<div class="product-thumb">
										<a href="#" class="product-thumb-link zoom-thumb"><img src="images/product/fashion/marketsale-fashion-06.jpg" alt="" /></a>
									</div>
									<div class="product-info">
										<div class="product-price">
											<ins class="color title18 font-bold">$359.00</ins>
										</div>
										<h3 class="title18 crim-font product-title"><a href="product-detail.html" class="black">Aztheme Product</a></h3>
									</div>
								</div>
							</li>
							<li>
								<div class="item-product table-custom">
									<div class="product-thumb">
										<a href="#" class="product-thumb-link zoom-thumb"><img src="images/product/fashion/marketsale-fashion-05.jpg" alt="" /></a>
									</div>
									<div class="product-info">
										<div class="product-price">
											<ins class="color title18 font-bold">$359.00</ins>
										</div>
										<h3 class="title18 crim-font product-title"><a href="product-detail.html" class="black">Aztheme Product</a></h3>
									</div>
								</div>
							</li>
							<li>
								<div class="item-product table-custom">
									<div class="product-thumb">
										<a href="#" class="product-thumb-link zoom-thumb"><img src="images/product/fashion/marketsale-fashion-01.jpg" alt="" /></a>
									</div>
									<div class="product-info">
										<div class="product-price">
											<ins class="color title18 font-bold">$359.00</ins>
										</div>
										<h3 class="title18 crim-font product-title"><a href="product-detail.html" class="black">Aztheme Product</a></h3>
									</div>
								</div>
							</li>
						</ul>
						<a href="#" class="bg-gray color viewall border"><i class="fa fa-plus-square-o"></i> <span class="black">View All fashion</span></a>
					</div>
					<!-- End List -->
					<div class="item-list-cat1">
						<h2 class="title18 crim-font font-bold text-uppercase"><i class="color title14 fa fa-wheelchair-alt"></i> furniture</h2>
						<ul class="list-none">
							<li>
								<div class="item-product table-custom">
									<div class="product-thumb">
										<a href="#" class="product-thumb-link zoom-thumb"><img src="images/product/furniture/marketsale-furniture-06.jpg" alt="" /></a>
									</div>
									<div class="product-info">
										<div class="product-price">
											<ins class="color title18 font-bold">$359.00</ins>
										</div>
										<h3 class="title18 crim-font product-title"><a href="product-detail.html" class="black">Aztheme Product</a></h3>
									</div>
								</div>
							</li>
							<li>
								<div class="item-product table-custom">
									<div class="product-thumb">
										<a href="#" class="product-thumb-link zoom-thumb"><img src="images/product/furniture/marketsale-furniture-05.jpg" alt="" /></a>
									</div>
									<div class="product-info">
										<div class="product-price">
											<ins class="color title18 font-bold">$359.00</ins>
										</div>
										<h3 class="title18 crim-font product-title"><a href="product-detail.html" class="black">Aztheme Product</a></h3>
									</div>
								</div>
							</li>
							<li>
								<div class="item-product table-custom">
									<div class="product-thumb">
										<a href="#" class="product-thumb-link zoom-thumb"><img src="images/product/furniture/marketsale-furniture-02.jpg" alt="" /></a>
									</div>
									<div class="product-info">
										<div class="product-price">
											<ins class="color title18 font-bold">$359.00</ins>
										</div>
										<h3 class="title18 crim-font product-title"><a href="product-detail.html" class="black">Aztheme Product</a></h3>
									</div>
								</div>
							</li>
						</ul>
						<a href="#" class="bg-gray color viewall border"><i class="fa fa-plus-square-o"></i> <span class="black">View All furniture</span></a>
					</div>
					<!-- End List -->
					<div class="item-list-cat1">
						<h2 class="title18 crim-font font-bold text-uppercase"><i class="color title14 fa fa-soccer-ball-o "></i> sport</h2>
						<ul class="list-none">
							<li>
								<div class="item-product table-custom">
									<div class="product-thumb">
										<a href="#" class="product-thumb-link zoom-thumb"><img src="images/product/sport/market-sport-06.jpg" alt="" /></a>
									</div>
									<div class="product-info">
										<div class="product-price">
											<ins class="color title18 font-bold">$359.00</ins>
										</div>
										<h3 class="title18 crim-font product-title"><a href="product-detail.html" class="black">Aztheme Product</a></h3>
									</div>
								</div>
							</li>
							<li>
								<div class="item-product table-custom">
									<div class="product-thumb">
										<a href="#" class="product-thumb-link zoom-thumb"><img src="images/product/sport/market-sport-05.jpg" alt="" /></a>
									</div>
									<div class="product-info">
										<div class="product-price">
											<ins class="color title18 font-bold">$359.00</ins>
										</div>
										<h3 class="title18 crim-font product-title"><a href="product-detail.html" class="black">Aztheme Product</a></h3>
									</div>
								</div>
							</li>
							<li>
								<div class="item-product table-custom">
									<div class="product-thumb">
										<a href="#" class="product-thumb-link zoom-thumb"><img src="images/product/sport/market-sport-02.jpg" alt="" /></a>
									</div>
									<div class="product-info">
										<div class="product-price">
											<ins class="color title18 font-bold">$359.00</ins>
										</div>
										<h3 class="title18 crim-font product-title"><a href="product-detail.html" class="black">Aztheme Product</a></h3>
									</div>
								</div>
							</li>
						</ul>
						<a href="#" class="bg-gray color viewall border"><i class="fa fa-plus-square-o"></i> <span class="black">View All sport</span></a>
					</div>
					<!-- End List -->
					<div class="item-list-cat1">
						<h2 class="title18 crim-font font-bold text-uppercase"><i class="color title14 fa fa-diamond"></i> jewelry</h2>
						<ul class="list-none">
							<li>
								<div class="item-product table-custom">
									<div class="product-thumb">
										<a href="#" class="product-thumb-link zoom-thumb"><img src="images/product/jewelry/market-jewelry-06.jpg" alt="" /></a>
									</div>
									<div class="product-info">
										<div class="product-price">
											<ins class="color title18 font-bold">$359.00</ins>
										</div>
										<h3 class="title18 crim-font product-title"><a href="product-detail.html" class="black">Aztheme Product</a></h3>
									</div>
								</div>
							</li>
							<li>
								<div class="item-product table-custom">
									<div class="product-thumb">
										<a href="#" class="product-thumb-link zoom-thumb"><img src="images/product/jewelry/market-jewelry-05.jpg" alt="" /></a>
									</div>
									<div class="product-info">
										<div class="product-price">
											<ins class="color title18 font-bold">$359.00</ins>
										</div>
										<h3 class="title18 crim-font product-title"><a href="product-detail.html" class="black">Aztheme Product</a></h3>
									</div>
								</div>
							</li>
							<li>
								<div class="item-product table-custom">
									<div class="product-thumb">
										<a href="#" class="product-thumb-link zoom-thumb"><img src="images/product/jewelry/market-jewelry-02.jpg" alt="" /></a>
									</div>
									<div class="product-info">
										<div class="product-price">
											<ins class="color title18 font-bold">$359.00</ins>
										</div>
										<h3 class="title18 crim-font product-title"><a href="product-detail.html" class="black">Aztheme Product</a></h3>
									</div>
								</div>
							</li>
						</ul>
						<a href="#" class="bg-gray color viewall border"><i class="fa fa-plus-square-o"></i> <span class="black">View All jewelry</span></a>
					</div>
					<!-- End List -->
					<div class="item-list-cat1">
						<h2 class="title18 crim-font font-bold text-uppercase"><i class="color title14 fa fa-clock-o"></i> Watches</h2>
						<ul class="list-none">
							<li>
								<div class="item-product table-custom">
									<div class="product-thumb">
										<a href="#" class="product-thumb-link zoom-thumb"><img src="images/product/fashion/marketsale-watch-06.jpg" alt="" /></a>
									</div>
									<div class="product-info">
										<div class="product-price">
											<ins class="color title18 font-bold">$359.00</ins>
										</div>
										<h3 class="title18 crim-font product-title"><a href="product-detail.html" class="black">Aztheme Product</a></h3>
									</div>
								</div>
							</li>
							<li>
								<div class="item-product table-custom">
									<div class="product-thumb">
										<a href="#" class="product-thumb-link zoom-thumb"><img src="images/product/fashion/marketsale-watch-05.jpg" alt="" /></a>
									</div>
									<div class="product-info">
										<div class="product-price">
											<ins class="color title18 font-bold">$359.00</ins>
										</div>
										<h3 class="title18 crim-font product-title"><a href="product-detail.html" class="black">Aztheme Product</a></h3>
									</div>
								</div>
							</li>
							<li>
								<div class="item-product table-custom">
									<div class="product-thumb">
										<a href="#" class="product-thumb-link zoom-thumb"><img src="images/product/fashion/marketsale-watch-02.jpg" alt="" /></a>
									</div>
									<div class="product-info">
										<div class="product-price">
											<ins class="color title18 font-bold">$359.00</ins>
										</div>
										<h3 class="title14 product-title"><a href="#">aztheme Watches</a></h3>
									</div>
								</div>
							</li>
						</ul>
						<a href="#" class="bg-gray color viewall border"><i class="fa fa-plus-square-o"></i> <span class="black">View All jewelry</span></a>
					</div>
					<!-- End List -->
					<div class="item-list-cat1">
						<h2 class="title18 crim-font font-bold text-uppercase"><i class="color title14 fa fa-pagelines"></i> bEAUTY</h2> 
						<ul class="list-none">
							<li>
								<div class="item-product table-custom item-product-onsale">
									<div class="product-thumb">
										<a href="#" class="product-thumb-link zoom-thumb"><img src="images/product/beauty/marketsale-beauty-01.jpg" alt="" /></a>
									</div>
									<div class="product-info">
										<div class="product-price">
											<del class="silver">$718.00</del>
											<ins class="color title18 font-bold">$359.00</ins>
											<label class="percent-sale">-50%</label>
										</div>
										<h3 class="title18 crim-font product-title"><a href="product-detail.html" class="black">Aztheme Product</a></h3>
									</div>
								</div>
							</li>
							<li>
								<div class="item-product table-custom">
									<div class="product-thumb">
										<a href="#" class="product-thumb-link zoom-thumb"><img src="images/product/beauty/marketsale-beauty-08.jpg" alt="" /></a>
									</div>
									<div class="product-info">
										<div class="product-price">
											<ins class="color title18 font-bold">$359.00</ins>
										</div>
										<h3 class="title18 crim-font product-title"><a href="product-detail.html" class="black">Aztheme Product</a></h3>
									</div>
								</div>
							</li>
							<li>
								<div class="item-product table-custom item-product-onsale">
									<div class="product-thumb">
										<a href="#" class="product-thumb-link zoom-thumb"><img src="images/product/beauty/marketsale-beauty-11.jpg" alt="" /></a>
									</div>
									<div class="product-info">
										<div class="product-price">
											<del class="silver">$718.00</del>
											<ins class="color title18 font-bold">$359.00</ins>
											<label class="percent-sale">-50%</label>
										</div>
										<h3 class="title18 crim-font product-title"><a href="product-detail.html" class="black">Aztheme Product</a></h3>
									</div>
								</div>
							</li>
						</ul>
						<a href="#" class="bg-gray color viewall border"><i class="fa fa-plus-square-o"></i> <span class="black">View All Beauty</span></a>
					</div>
					<!-- End List -->
					<div class="item-list-cat1">
						<h2 class="title18 crim-font font-bold text-uppercase"><i class="color title14 fa fa-coffee"></i> food & drink</h2>
						<ul class="list-none">
							<li>
								<div class="item-product table-custom">
									<div class="product-thumb">
										<a href="#" class="product-thumb-link zoom-thumb"><img src="images/product/food/marketsale-food-01.jpg" alt="" /></a>
									</div>
									<div class="product-info">
										<div class="product-price">
											<ins class="color title18 font-bold">$359.00</ins>
										</div>
										<h3 class="title18 crim-font product-title"><a href="product-detail.html" class="black">Aztheme Product</a></h3>
									</div>
								</div>
							</li>
							<li>
								<div class="item-product table-custom">
									<div class="product-thumb">
										<a href="#" class="product-thumb-link zoom-thumb"><img src="images/product/food/marketsale-food-02.jpg" alt="" /></a>
									</div>
									<div class="product-info">
										<div class="product-price">
											<ins class="color title18 font-bold">$359.00</ins>
										</div>
										<h3 class="title18 crim-font product-title"><a href="product-detail.html" class="black">Aztheme Product</a></h3>
									</div>
								</div>
							</li>
							<li>
								<div class="item-product table-custom">
									<div class="product-thumb">
										<a href="#" class="product-thumb-link zoom-thumb"><img src="images/product/food/marketsale-food-03.jpg" alt="" /></a>
									</div>
									<div class="product-info">
										<div class="product-price">
											<ins class="color title18 font-bold">$359.00</ins>
										</div>
										<h3 class="title18 crim-font product-title"><a href="product-detail.html" class="black">Aztheme Product</a></h3>
									</div>
								</div>
							</li>
						</ul>
						<a href="#" class="bg-gray color viewall border"><i class="fa fa-plus-square-o"></i> <span class="black">View All Food & Drink</span></a>
					</div>
					<!-- End List -->
					<div class="item-list-cat1">
						<h2 class="title18 crim-font font-bold text-uppercase"><i class="color title14 fa fa-female"></i> fashion</h2>
						<ul class="list-none">
							<li>
								<div class="item-product table-custom">
									<div class="product-thumb">
										<a href="#" class="product-thumb-link zoom-thumb"><img src="images/product/fashion/marketsale-fashion-06.jpg" alt="" /></a>
									</div>
									<div class="product-info">
										<div class="product-price">
											<ins class="color title18 font-bold">$359.00</ins>
										</div>
										<h3 class="title18 crim-font product-title"><a href="product-detail.html" class="black">Aztheme Product</a></h3>
									</div>
								</div>
							</li>
							<li>
								<div class="item-product table-custom">
									<div class="product-thumb">
										<a href="#" class="product-thumb-link zoom-thumb"><img src="images/product/fashion/marketsale-fashion-05.jpg" alt="" /></a>
									</div>
									<div class="product-info">
										<div class="product-price">
											<ins class="color title18 font-bold">$359.00</ins>
										</div>
										<h3 class="title18 crim-font product-title"><a href="product-detail.html" class="black">Aztheme Product</a></h3>
									</div>
								</div>
							</li>
							<li>
								<div class="item-product table-custom">
									<div class="product-thumb">
										<a href="#" class="product-thumb-link zoom-thumb"><img src="images/product/fashion/marketsale-fashion-01.jpg" alt="" /></a>
									</div>
									<div class="product-info">
										<div class="product-price">
											<ins class="color title18 font-bold">$359.00</ins>
										</div>
										<h3 class="title18 crim-font product-title"><a href="product-detail.html" class="black">Aztheme Product</a></h3>
									</div>
								</div>
							</li>
						</ul>
						<a href="#" class="bg-gray color viewall border"><i class="fa fa-plus-square-o"></i> <span class="black">View All fashion</span></a>
					</div>
					<!-- End List -->
					<div class="item-list-cat1">
						<h2 class="title18 crim-font font-bold text-uppercase"><i class="color title14 fa fa-wheelchair-alt"></i> furniture</h2>
						<ul class="list-none">
							<li>
								<div class="item-product table-custom">
									<div class="product-thumb">
										<a href="#" class="product-thumb-link zoom-thumb"><img src="images/product/furniture/marketsale-furniture-06.jpg" alt="" /></a>
									</div>
									<div class="product-info">
										<div class="product-price">
											<ins class="color title18 font-bold">$359.00</ins>
										</div>
										<h3 class="title18 crim-font product-title"><a href="product-detail.html" class="black">Aztheme Product</a></h3>
									</div>
								</div>
							</li>
							<li>
								<div class="item-product table-custom">
									<div class="product-thumb">
										<a href="#" class="product-thumb-link zoom-thumb"><img src="images/product/furniture/marketsale-furniture-05.jpg" alt="" /></a>
									</div>
									<div class="product-info">
										<div class="product-price">
											<ins class="color title18 font-bold">$359.00</ins>
										</div>
										<h3 class="title18 crim-font product-title"><a href="product-detail.html" class="black">Aztheme Product</a></h3>
									</div>
								</div>
							</li>
							<li>
								<div class="item-product table-custom">
									<div class="product-thumb">
										<a href="#" class="product-thumb-link zoom-thumb"><img src="images/product/furniture/marketsale-furniture-02.jpg" alt="" /></a>
									</div>
									<div class="product-info">
										<div class="product-price">
											<ins class="color title18 font-bold">$359.00</ins>
										</div>
										<h3 class="title18 crim-font product-title"><a href="product-detail.html" class="black">Aztheme Product</a></h3>
									</div>
								</div>
							</li>
						</ul>
						<a href="#" class="bg-gray color viewall border"><i class="fa fa-plus-square-o"></i> <span class="black">View All furniture</span></a>
					</div>
					<!-- End List -->
				</div>
			</div>
			<!-- End Cat Slider -->
		</div>
	</div>
	
	<!-- End Newsletter Popup -->
	<div class="wishlist-mask">
		<div class="wishlist-popup">
			<span class="popup-icon"><i class="fa fa-bullhorn" aria-hidden="true"></i></span>
			<p class="wishlist-alert">"Aztheme Product" was added to wishlist</p>
			<div class="wishlist-button">
				<a href="#">Continue Shopping (<span class="wishlist-countdown">5</span>)</a>
				<a href="#">Go To Shopping Cart</a>
			</div>
		</div>
	</div>
	<div id="loading">
		<div id="loading-center">
			<div id="loading-center-absolute">
				<div class="object" id="object_four"></div>
				<div class="object" id="object_three"></div>
				<div class="object" id="object_two"></div>
				<div class="object" id="object_one"></div>
			</div>
		</div>
	</div>
	<!-- End Preload -->
	<a href="#" class="scroll-top dark"><i class="fa fa-angle-double-up"></i></a>
@endsection