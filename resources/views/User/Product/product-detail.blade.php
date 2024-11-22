@extends('layouts.app')
@section('title', 'Product Detail')

@section('content')
<div id="content">
		<div class="content-page-product">
			<div class="container">
				
				<div class="product-detail">
					<div class="row">
						<div class="col-md-5 col-sm-6 col-xs-12">
							<div class="detail-gallery">
								<div class="mid">
								<img src="{{ asset($product->image_path) }}" alt=""/>
									
								</div>
								
							</div>
							<!-- End Gallery -->
						</div>
						<div class="col-md-7 col-sm-6 col-xs-12">
							<div class="detail-info">
								<h2 class="product-title title30 gray font-bold">{{$product->name}}</h2>
								<div class="product-price">
									<del class="silver">${{$product->price}}</del>
									<ins class="color title18 font-bold">${{$product->sale_price}}</ins>
								</div>
								<div class="product-rate">
									<div class="product-rating" style="width:100%"></div>
								</div>
								<div class="wrap-qty-cart">
									<div class="detail-qty ">
									
										
									</div>
									<div class="product-extra-link">
									<form style="margin-left: -126px; margin-bottom: 10px;" action="{{ route('cart.add', $product->id) }}" method="POST">
											@csrf
											<button type="submit" class="btn btn-primary">Add to Cart</button>
									</form>
										
										
									</div>
								</div>
								<ul class="list-none product-meta-info">
									<li>
										<label class="silver">Category:</label>
										<a href="#">{{$product->category->name}}</a>
									</li>
								</ul>
							</div>
						</div>
					</div>		
				</div>		
				<!-- End Product Detail --> 
			</div>
		</div>
	</div>
    @endsection