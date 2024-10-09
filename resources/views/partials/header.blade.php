<header id="header">
		<!-- End Delivery -->
		<div class="top-header">
			<div class="container">
				<div class="row">
					<div class="col-md-6 col-sm-6 hidden-xs">
						<ul class="currency-language list-inline-block">
							<li>
								<div class="language-box dropdown-box">
									<a href="#" class="dropdown-link"><span>Language:</span> <img src="images/flag/flag-en.png" alt=""><span></span></a>
									<ul class="list-none dropdown-list">
										<li><a href="#"><img src="images/flag/flag-en.png" alt=""><span>English</span></a></li>
									</ul>
								</div>
							</li>
							<li>
								<div class="currency-box dropdown-box">
									<a href="#" class="dropdown-link"><span>Currency:</span> USD</a>
									<ul class="list-none dropdown-list">
										<li><a href="#"><span class="currency-index">$</span>USD</a></li>
									</ul>
								</div>
							</li>
						</ul>
					</div>
					<div class="col-md-6 col-sm-6 col-xs-12">
						<ul class="list-inline-block top-custom-link box-hover-active pull-right">
						@if (Auth::check())
							<li class="item-hover-active item-active active"><a href="#"><i class="fa fa-user"></i><span>My Account</span></a></li>
							<li class="item-hover-active"><a href="#"><i class="fa fa-heart"></i><span>My Wishlist</span></a></li>
							<li class="item-hover-active"><a href="#"><i class="fa fa-check-square"></i><span>Checkout</span></a></li>
							<li class="item-hover-active"><a href="{{route('logOut')}}"><i class="fa fa-lock"></i><span>Log Out</span></a></li>
							@else
							<li class="item-hover-active"><a href="{{ route('login') }}"><i class="fa fa-lock"></i><span>Login</span></a></li>
							<li class="item-hover-active"><a href="{{ route('register') }}"><i class="fa fa-lock"></i><span>Register</span></a></li>
							@endif
						</ul>
					</div>
				</div>
			</div>
		</div>
		<!-- End Top Header -->
		<div class="main-header1">
			<div class="container">
				<div class="row">
					<div class="col-md-3 col-sm-12 col-xs-12">
						<div class="logo logo1">
							<h1 class="title30 text-uppercase"><strong class="dark">az</strong><span class="bg-color white">theme</span></h1>
							<h2 class="title11 opacity dark text-uppercase">Computer Shopping</h2>
						</div>
					</div>
					<div class="col-md-9 col-sm-12 col-xs-12">
						<div class="wrap-search-cart1 flex-wrapper align_items-flex-end">
							<div class="wrap-search-form">
								<form class="search-form">
									<div class="dropdown-box">
										<a href="javascript:void(0)" class="dropdown-link">All Categories</a>
										<ul class="list-none dropdown-list">
											<li><a href="#">Sport</a></li>
											<li><a href="#">Beauty</a></li>
											<li><a href="#">Fashion</a></li>
											<li><a href="#">Swatches</a></li>
											<li><a href="#">Furniture</a></li>
											<li><a href="#">Jewelry</a></li>
										</ul>
									</div>
									<input type="text" name="s" placeholder="What are you looking for?"/>
									<div class="submit-form">
										<input type="submit" value="" />
									</div>
								</form>
							</div>	
							<div class="mini-cart-box mini-cart1 aside-box">
								<a class="mini-cart-link" href="cart.html">
									<span class="mini-cart-icon title30 color"><i class="fa fa-shopping-basket"></i></span>
									<span class="mini-cart-text">
										<span class="mini-cart-title black font-bold text-uppercase">Shopping Cart</span><br>
										<span class="mini-cart-number gray">2 Item - </span>
										<span class="mini-cart-total-price color">$970.00</span>
									</span>
								</a>
								<div class="mini-cart-content text-left">
									<h2 class="title18 font-bold">(4) ITEMS IN MY CART</h2>
									<div class="list-mini-cart-item">
										<div class="product-mini-cart table-custom">
											<div class="product-thumb">
												<a href="detail.html" class="product-thumb-link"><img alt="" src="images/product/fashion/marketsale-fashion-01.jpg"></a>
											</div>
											<div class="product-info">
												<h3 class="title14 product-title text-uppercase"><a href="product-detail.html">Aztheme Product</a></h3>
												<div class="mini-cart-qty">
													<span>1 x $40.00</span>
												</div>
											</div>
											<div class="product-delete text-right">
												<a href="#" class="remove-product"><i class="fa fa-trash"></i></a>
											</div>
										</div>
										<div class="product-mini-cart table-custom">
											<div class="product-thumb">
												<a href="detail.html" class="product-thumb-link"><img alt="" src="images/product/fashion/marketsale-fashion-06.jpg"></a>
											</div>
											<div class="product-info">
												<h3 class="title14 product-title text-uppercase"><a href="product-detail.html">Aztheme Product</a></h3>
												<div class="mini-cart-qty">
													<span>1 x $40.00</span>
												</div>
											</div>
											<div class="product-delete text-right">
												<a href="#" class="remove-product"><i class="fa fa-trash"></i></a>
											</div>
										</div>
										<div class="product-mini-cart table-custom">
											<div class="product-thumb">
												<a href="detail.html" class="product-thumb-link"><img alt="" src="images/product/fashion/marketsale-fashion-12.png"></a>
											</div>
											<div class="product-info">
												<h3 class="title14 product-title text-uppercase"><a href="product-detail.html">Aztheme Product</a></h3>
												<div class="mini-cart-qty">
													<span>1 x $40.00</span>
												</div>
											</div>
											<div class="product-delete text-right">
												<a href="#" class="remove-product"><i class="fa fa-trash"></i></a>
											</div>
										</div>
										<div class="product-mini-cart table-custom">
											<div class="product-thumb">
												<a href="detail.html" class="product-thumb-link"><img alt="" src="images/product/fashion/marketsale-watch-01.jpg"></a>
											</div>
											<div class="product-info">
												<h3 class="title14 product-title text-uppercase"><a href="product-detail.html">Aztheme Product</a></h3>
												<div class="mini-cart-qty">
													<span>1 x $40.00</span>
												</div>
											</div>
											<div class="product-delete text-right">
												<a href="#" class="remove-product"><i class="fa fa-trash"></i></a>
											</div>
										</div>
									</div>
									<div class="mini-cart-total text-uppercase title18 font-bold clearfix">
										<span class="pull-left">TOTAL</span>
										<strong class="pull-right color mini-cart-total-price">$160.00</strong>
									</div>
									<div class="mini-cart-button">
										<a class="mini-cart-view shop-button white" href="#">View cart </a>
										<a class="mini-cart-checkout shop-button" href="#">Checkout</a>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!-- End Main Header -->
		<div class="header-nav1 header-ontop bg-white">
			<div class="container">
				<nav class="main-nav main-nav1">
					<ul>
						<li class="has-mega-menu">
							<a href="index.html">Home</a>
							
						</li>
						<li class="menu-item-has-children has-mega-menu">
							<a href="#">EXPLORE STORES</a>
							<div class="mega-menu full-mega-menu">
								<div class="row">
									<div class="col-md-3 col-sm-4 col-xs-12">
										<div class="mega-list-cat">
											<h2 class="title18 font-bold text-uppercase crim-font">Categories</h2>
											<ul class="list-none">
												<li><a href="#"><i class="fa fa-pagelines"></i>Beauty</a></li>
												<li><a href="#"><i class="fa fa-bath"></i>Furniture</a></li>
												<li><a href="#"><i class="fa fa-female"></i>Fashion</a></li>
												<li><a href="#"><i class="fa fa-coffee"></i>Food &amp; Drink</a></li>
												<li><a href="#"><i class="fa fa-bicycle"></i>Sport</a></li>
												<li><a href="#"><i class="fa fa-diamond"></i>Jewelry </a></li>
												<li><a href="#"><i class="fa fa-desktop"></i>Computer</a></li>
												<li><a href="#"><i class="fa fa-television"></i>TV &amp; Audio</a></li>
												<li><a href="#"><i class="fa fa-camera"></i>Digital Camera</a></li>
												<li><a href="#"><i class="fa fa-headphones"></i>Head Phone</a></li>
											</ul>
										</div>
									</div>
									<div class="col-md-3 col-sm-4 col-xs-12">
										<div class="mega-menu-box">
											<h2 class="title18 title-mega-menu text-uppercase font-bold crim-font">Deals</h2>
											<div class="mega-product-slider">
												<div class="wrap-item rect-navi group-navi" data-pagination="false" data-navigation="true" data-itemscustom="[[0,1]]">
													<div class="item-product item-product1 text-center">
														<div class="product-thumb">
															<a href="#" class="product-thumb-link zoom-thumb"><img src="images/product/fashion/marketsale-watch-01.jpg" alt=""></a>
															<a href="quick-view.html" class="quickview-link fancybox.iframe"><i class="fa fa-search"></i></a>
														</div>
														<div class="product-info">
															<div class="product-price">
																<ins class="color title18 font-bold">$359.00</ins>
															</div>
															<h3 class="title18 crim-font product-title"><a href="product-detail.html" class="black">Aztheme Product</a></h3>
															<a href="#" class="cat-parent silver">Fashion <span class="title10 silver">(8)</span></a>
														</div>
													</div>
													<div class="item-product item-product1 text-center">
														<div class="product-thumb">
															<a href="#" class="product-thumb-link zoom-thumb"><img src="images/product/furniture/marketsale-furniture-09.jpg" alt=""></a>
															<a href="quick-view.html" class="quickview-link fancybox.iframe"><i class="fa fa-search"></i></a>
														</div>
														<div class="product-info">
															<div class="product-price">
																<ins class="color title18 font-bold">$359.00</ins>
															</div>
															<h3 class="title18 crim-font product-title"><a href="product-detail.html" class="black">Aztheme Product</a></h3>
															<a href="#" class="cat-parent silver">Fashion <span class="title10 silver">(8)</span></a>
														</div>
													</div>
													<div class="item-product item-product1 text-center">
														<div class="product-thumb">
															<a href="#" class="product-thumb-link zoom-thumb"><img src="images/product/beauty/marketsale-beauty-09.jpg" alt=""></a>
															<a href="quick-view.html" class="quickview-link fancybox.iframe"><i class="fa fa-search"></i></a>
														</div>
														<div class="product-info">
															<div class="product-price">
																<ins class="color title18 font-bold">$359.00</ins>
															</div>
															<h3 class="title18 crim-font product-title"><a href="product-detail.html" class="black">Aztheme Product</a></h3>
															<a href="#" class="cat-parent silver">Fashion <span class="title10 silver">(8)</span></a>
														</div>
													</div>
												</div>
											</div>
										</div>
									</div>
									<div class="col-md-3 col-sm-4 col-xs-12">
										<div class="mega-menu-box">
											<h2 class="title18 title-mega-menu text-uppercase font-bold crim-font">Trending</h2>
											<div class="mega-product-slider">
												<div class="wrap-item rect-navi group-navi" data-pagination="false" data-navigation="true" data-itemscustom="[[0,1]]">
													<div class="item-product item-product1 text-center">
														<div class="product-thumb">
															<a href="#" class="product-thumb-link zoom-thumb"><img src="images/product/furniture/marketsale-furniture-12.jpg" alt=""></a>
															<a href="quick-view.html" class="quickview-link fancybox.iframe"><i class="fa fa-search"></i></a>
														</div>
														<div class="product-info">
															<div class="product-price">
																<ins class="color title18 font-bold">$359.00</ins>
															</div>
															<h3 class="title18 crim-font product-title"><a href="product-detail.html" class="black">Aztheme Product</a></h3>
															<a href="#" class="cat-parent silver">Fashion <span class="title10 silver">(8)</span></a>
														</div>
													</div>
													<div class="item-product item-product1 text-center">
														<div class="product-thumb">
															<a href="#" class="product-thumb-link zoom-thumb"><img src="images/product/furniture/marketsale-furniture-06.jpg" alt=""></a>
															<a href="quick-view.html" class="quickview-link fancybox.iframe"><i class="fa fa-search"></i></a>
														</div>
														<div class="product-info">
															<div class="product-price">
																<ins class="color title18 font-bold">$359.00</ins>
															</div>
															<h3 class="title18 crim-font product-title"><a href="product-detail.html" class="black">Aztheme Product</a></h3>
															<a href="#" class="cat-parent silver">Fashion <span class="title10 silver">(8)</span></a>
														</div>
													</div>
													<div class="item-product item-product1 text-center">
														<div class="product-thumb">
															<a href="#" class="product-thumb-link zoom-thumb"><img src="images/product/furniture/marketsale-furniture-05.jpg" alt=""></a>
															<a href="quick-view.html" class="quickview-link fancybox.iframe"><i class="fa fa-search"></i></a>
														</div>
														<div class="product-info">
															<div class="product-price">
																<ins class="color title18 font-bold">$359.00</ins>
															</div>
															<h3 class="title18 crim-font product-title"><a href="product-detail.html" class="black">Aztheme Product</a></h3>
															<a href="#" class="cat-parent silver">Fashion <span class="title10 silver">(8)</span></a>
														</div>
													</div>
												</div>
											</div>
										</div>
									</div>
									<div class="col-md-3 hidden-sm col-xs-12">
										<div class="mega-menu-box">
											<h2 class="title18 title-mega-menu text-uppercase font-bold crim-font">Best Seller</h2>
											<div class="mega-product-slider">
												<div class="wrap-item rect-navi group-navi" data-pagination="false" data-navigation="true" data-itemscustom="[[0,1]]">
													<div class="item-product item-product1 text-center">
														<div class="product-thumb">
															<a href="#" class="product-thumb-link zoom-thumb"><img src="images/product/jewelry/market-jewelry-10.jpg" alt=""></a>
															<a href="quick-view.html" class="quickview-link fancybox.iframe"><i class="fa fa-search"></i></a>
														</div>
														<div class="product-info">
															<div class="product-price">
																<ins class="color title18 font-bold">$359.00</ins>
															</div>
															<h3 class="title18 crim-font product-title"><a href="product-detail.html" class="black">Aztheme Product</a></h3>
															<a href="#" class="cat-parent silver">Fashion <span class="title10 silver">(8)</span></a>
														</div>
													</div>
													<div class="item-product item-product1 text-center">
														<div class="product-thumb">
															<a href="#" class="product-thumb-link zoom-thumb"><img src="images/product/food/marketsale-food-07.jpg" alt=""></a>
															<a href="quick-view.html" class="quickview-link fancybox.iframe"><i class="fa fa-search"></i></a>
														</div>
														<div class="product-info">
															<div class="product-price">
																<ins class="color title18 font-bold">$359.00</ins>
															</div>
															<h3 class="title18 crim-font product-title"><a href="product-detail.html" class="black">Aztheme Product</a></h3>
															<a href="#" class="cat-parent silver">Fashion <span class="title10 silver">(8)</span></a>
														</div>
													</div>
													<div class="item-product item-product1 text-center">
														<div class="product-thumb">
															<a href="#" class="product-thumb-link zoom-thumb"><img src="images/product/sport/market-sport-08.jpg" alt=""></a>
															<a href="quick-view.html" class="quickview-link fancybox.iframe"><i class="fa fa-search"></i></a>
														</div>
														<div class="product-info">
															<div class="product-price">
																<ins class="color title18 font-bold">$359.00</ins>
															</div>
															<h3 class="title18 crim-font product-title"><a href="product-detail.html" class="black">Aztheme Product</a></h3>
															<a href="#" class="cat-parent silver">Fashion <span class="title10 silver">(8)</span></a>
														</div>
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>
								
							</div>
						</li>
						<li><a href="#">FLASH SALE</a></li>
				
					</ul>
					<a href="#" class="toggle-mobile-menu"><span></span></a>
				</nav>
			</div>
		</div>
	</header>