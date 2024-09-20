<!DOCTYPE HTML>
<html lang="en-US">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1"/>
	<meta name="description" content="Aztheme is new Html theme that we have designed to help you transform your store into a beautiful online showroom. This is a fully responsive Html theme, with multiple versions for homepage and multiple templates for sub pages as well" />
	<meta name="keywords" content="Aztheme,7uptheme" />
	<meta name="robots" content="noodp,index,follow" />
	<meta name='revisit-after' content='1 days' />
	<<title>@yield('title', 'Aztheme | Index')</title>
<link href="https://fonts.googleapis.com/css?family=Poppins:300,400,700%7cCrimson+Text:400,400i,700,700i" rel="stylesheet">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css" integrity="sha512-vKMx8UnXk60zUwyUnUPM3HbQo8QfmNx7+ltw8Pm5zLusl1XIfwcxo8DbWCqMGKaWeNxWA8yrx5v3SaVpMvR3CA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
<link rel="stylesheet" type="text/css" href="{{ asset('css/libs/font-awesome.min.css') }}"/>
<link rel="stylesheet" type="text/css" href="{{ asset('css/libs/bootstrap.min.css') }}"/>
<link rel="stylesheet" type="text/css" href="{{ asset('css/libs/bootstrap-theme.min.css') }}"/>
<link rel="stylesheet" type="text/css" href="{{ asset('css/libs/jquery.fancybox.min.css') }}"/>
<link rel="stylesheet" type="text/css" href="{{ asset('css/libs/jquery-ui.min.css') }}"/>
<link rel="stylesheet" type="text/css" href="{{ asset('css/alert.css') }}"/>
<link rel="stylesheet" type="text/css" href="{{ asset('css/libs/owl.carousel.min.css') }}"/>
<link rel="stylesheet" type="text/css" href="{{ asset('css/libs/owl.transitions.min.css') }}"/>
<link rel="stylesheet" type="text/css" href="{{ asset('css/libs/owl.theme.min.css') }}"/>
<link rel="stylesheet" type="text/css" href="{{ asset('css/libs/animate.min.css') }}"/>
<link rel="stylesheet" type="text/css" href="{{ asset('css/libs/hover.min.css') }}"/>
<link rel="stylesheet" type="text/css" href="{{ asset('css/color.css') }}" media="all"/>
<link rel="stylesheet" type="text/css" href="{{ asset('css/theme.css') }}" media="all"/>
<link rel="stylesheet" type="text/css" href="{{ asset('css/responsive.css') }}" media="all"/>
<link rel="stylesheet" type="text/css" href="{{ asset('css/browser.css') }}" media="all"/>
</head>
<body class="preload">
<div class="wrap">
    @include('partials.header')

 
     @yield('content')
    

    @include('partials.footer')
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
</div>
    <script src="{{ asset('js/libs/jquery-3.2.1.min.js') }}"></script>
<script src="{{ asset('js/libs/bootstrap.min.js') }}"></script>
<script src="{{ asset('js/libs/jquery.fancybox.min.js') }}"></script>
<script src="{{ asset('js/libs/popup.min.js') }}"></script>
<script src="{{ asset('js/libs/jquery-ui.min.js') }}"></script>
<script src="{{ asset('js/libs/owl.carousel.min.js') }}"></script>
<script src="{{ asset('js/libs/timecircles.min.js') }}"></script>
<script src="{{ asset('js/libs/wow.min.js') }}"></script>
<script src="{{ asset('js/theme.js') }}"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js" integrity="sha512-VEd+nq25CkR676O+pLBnDW09R7VQX9Mdiij052gVCp5yVH3jGtH70Ho/UUv4mJDsEdTvqRCFZg0NKGiojGnUCw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
@if(session('error'))
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            toastr.error("{{ session('error') }}");
        });
    </script>
	@endif
	@if(session('success'))
	<script>
		 document.addEventListener('DOMContentLoaded', function() {
		toastr.success("{{ session('success') }}");});
	</script>
	@endif
</body>
</html>