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
							<li class="item-hover-active item-active active"><a href="/my-profile"><i class="fa fa-user"></i><span>My Account</span></a></li>
							<li class="item-hover-active"><a href="#"><i class="fa fa-heart"></i><span>My Wishlist</span></a></li>
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
								<form  class="search-form" action="{{ url('/searchProduct') }}" method="GET">
									<div class="dropdown-box">
										<a href="javascript:void(0)" class="dropdown-link">All Categories</a>
									</div>
									<input type="text" name="s" placeholder="What are you looking for?"/>
									<div class="submit-form">
										<input type="submit" value="" />
									</div>
								</form>
							</div>	
							<div class="mini-cart-box mini-cart1 ">
								<a class="mini-cart-link" href="/carts">
									<span class="mini-cart-icon title30 color"><i class="fa fa-shopping-basket"></i></span>
									<span class="mini-cart-text">
										<span class="mini-cart-title black font-bold text-uppercase">Shopping Cart</span><br>
									</span>
								</a>
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
							<a href="/home">Home</a>
							
						</li>
						<li class=" has-mega-menu">
							<a href="/list-products">EXPLORE STORES</a>
						</li>
						<li><a href="#">FLASH SALE</a></li>
				
					</ul>
					<a href="#" class="toggle-mobile-menu"><span></span></a>
				</nav>
			</div>
		</div>
	</header>
<script>
	$('.mini-cart-link').click(function(e) {
    e.preventDefault(); // Ensure this isn't causing the issue
    window.location.href = '/carts';
});

</script>