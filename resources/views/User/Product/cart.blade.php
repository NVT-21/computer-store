@extends('layouts.app')
@section('title', 'Cart')

@section('content')
<div id="content">
		<div class="content-page woocommerce"> 
			<div class="container">
				<div class="content-about cart-content-page">
					<h2 class="title30 text-uppercase font-bold dark">Cart</h2>
					@if(session('cart'))
					<form method="post">
						<div class="table-responsive">
							<table class="shop_table cart table">
								<thead>
									<tr>
										<th class="product-remove">&nbsp;</th>
										<th class="product-thumbnail">&nbsp;</th>
										<th class="product-name">Product</th>
										<th class="product-price">Price</th>
										<th class="product-quantity">Quantity</th>
										<th class="product-subtotal">Total</th>
									</tr>
								</thead>
								<tbody>
								@foreach(session('cart') as $id => $details)
									<tr class="cart_item">
										<td class="product-remove">
											<a class="remove" href="#"><i class="fa fa-trash"></i></a>
										</td>
										<td class="product-thumbnail">
											<a href="#"><img  src="images/product/fashion/marketsale-watch-11.jpg" alt=""/></a>					
										</td>
										<td class="product-name" data-title="Product">
											<a href="product-detail.html">{{$details['name']}}</a>					
										</td>
										<td class="product-price" data-title="Price">
											<span class="amount">${{$details['price']}}</span>					
										</td>
										<td class="product-quantity" data-title="Quantity">
											<div class="detail-qty border">
												<a href="#" class="qty-down silver"><i class="fa fa-minus-square"></i></a>
												<span class="qty-val">{{$details['quantity']}}</span>
												<a href="#" class="qty-up silver"><i class="fa fa-plus-square"></i></a>
											</div>
										</td>
										<td class="product-subtotal" data-title="Total">
											<span class="amount">${{ $details['price'] * $details['quantity'] }}</span>					
										</td>
									</tr>
									@endforeach
									<tr>
										<td class="actions" colspan="6">
											<div class="coupon">
												<label for="coupon_code">Coupon:</label> 
												<input type="text" placeholder="Coupon code" value="" id="coupon_code" class="input-text" name="coupon_code"> 
												<input type="submit" value="Apply Coupon" name="apply_coupon" class="button bg-color">
											</div>
											<input type="submit" value="Update Cart" name="update_cart" class="button bg-color">			
										</td>
									</tr>
									
								</tbody>
							</table>
						</div>
					</form>
					<div class="cart-collaterals">
						<div class="cart_totals ">
							<h2>Cart Totals</h2>
							<div class="table-responsive">
								<table class="table">
									<tbody>
										<tr class="cart-subtotal">
											<th>Subtotal</th>
											<td><strong class="amount">$106.00</strong></td>
										</tr>
										<tr class="shipping">
											<th>Shipping</th>
											<td>
												<ul class="list-none" id="shipping_method">
													<li>
														<input type="radio" class="shipping_method" checked="checked" value="free_shipping" id="shipping_method_0_free_shipping" data-index="0" name="shipping_method[0]">
														<label for="shipping_method_0_free_shipping">Free Shipping</label>
													</li>
													<li>
														<input type="radio" class="shipping_method" value="local_delivery" id="shipping_method_0_local_delivery" data-index="0" name="shipping_method[0]">
														<label for="shipping_method_0_local_delivery">Local Delivery (Free)</label>
													</li>
													<li>
														<input type="radio" class="shipping_method" value="local_pickup" id="shipping_method_0_local_pickup" data-index="0" name="shipping_method[0]">
														<label for="shipping_method_0_local_pickup">Local Pickup (Free)</label>
													</li>
												</ul>
											</td>
										</tr>
										<tr class="order-total">
											<th>Total</th>
											<td><strong><span class="amount">$106.00</span></strong> </td>
										</tr>
									</tbody>
								</table>
							</div>
							<div class="wc-proceed-to-checkout">
								<a class="checkout-button button alt wc-forward bg-color" href="#">Proceed to Checkout</a>
							</div>
						</div>
					</div>
				</div>	
			</div>
		</div>
		@else
			<p>Your cart is empty</p>
		@endif
		<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js" integrity="sha512-v2CJ7UaYy4JwqLDIrZUI/4hqeoQieOmAZNXBeQyjo21dadnwR+8ZaIJVT8EE2iyI61OV8e6M8PP2/4hpQINQ/g==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
		<script>
			// Khi nhấn nút tăng số lượng
$('.qty-up').click(function(e) {
    e.preventDefault();
    var $row = $(this).closest('tr'); // Get the closest row
    var $quantityElem = $row.find('.qty-val'); // Find quantity element
    var quantity = parseInt($quantityElem.text()); // Get current quantity
	var priceText = $row.find('.product-price .amount').text(); // Get price from data attribute
	console.log(priceText);

    // Increase quantity
    quantity++;
	console.log(quantity);
    $quantityElem.text(quantity); // Update quantity display

    // Calculate subtotal
    var subtotal = (priceText*1) * quantity;
	console.log(subtotal);
    $row.find('.product-subtotal .amount').text('$' + subtotal.toFixed(2)); // Update subtotal display
});

// Khi nhấn nút giảm số lượng
$('.qty-down').click(function(e) {
    e.preventDefault();
    var $row = $(this).closest('tr'); // Get the closest row
    var $quantityElem = $row.find('.qty-val'); // Find quantity element
    var quantity = parseInt($quantityElem.text()); // Get current quantity
    var price = parseFloat($row.find('.product-price').data('price')); // Get price from data attribute

    // Decrease quantity but not below 1
    if (quantity > 1) {
        quantity--;
        $quantityElem.text(quantity); // Update quantity display

        // Calculate subtotal
        var subtotal = price * quantity;
        $row.find('.product-subtotal .amount').text('$' + subtotal.toFixed(2)); // Update subtotal display
    }
});


		</script>
		<!-- End Content Pages -->
	</div>
    @endsection