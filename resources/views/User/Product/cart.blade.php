@extends('layouts.app')
@section('title', 'Cart')

@section('content')
@php
    $total = 0; // Initialize total
@endphp
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
								@php
								// Calculate subtotal for each product and add it to the total
								$subtotal = $details['price'] * $details['quantity'];
								$total += $subtotal;
								@endphp
									<tr class="cart_item" data-id="{{ $id }}">
										<td class="product-remove">
											<a class="removeProductOfCart" href="#"><i class="fa fa-trash"></i></a>
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
										<td><strong><span class="amount">${{ $total }}</span></strong></td>
										</tr>
									</tbody>
								</table>
							</div>
							<div class="wc-proceed-to-checkout">
								<a class="checkout-button button alt wc-forward bg-color" href="/check-out">Proceed to Checkout</a>
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
	var priceText = $row.find('.product-price .amount').text().replace(/[^0-9.]/g, ''); // Get price from data attribute
	console.log(priceText);


	console.log(quantity);
    $quantityElem.text(quantity); // Update quantity display

    // Calculate subtotal
    const subtotal = (priceText*1) * (quantity*1+1);
	console.log(subtotal);
    $row.find('.product-subtotal .amount').text('$' + subtotal.toFixed(2)); 
	updateTotalPrice();
	// Update subtotal display
});
function updateTotalPrice() {
    var total = 0;

    // Loop through each product row and sum up the subtotals
    $('.cart_item').each(function() {
        var subtotalText = $(this).find('.product-subtotal .amount').text().replace(/[^0-9.]/g, ''); // Get subtotal text and remove non-numeric characters
        var subtotal = parseFloat(subtotalText); // Convert to number
        total += subtotal; // Add to total
    });

    // Update the total price display
    $('.order-total .amount').text('$' + total.toFixed(2));
}
$('.removeProductOfCart').click(function(e) {
    e.preventDefault();
    
    var $row = $(this).closest('tr'); // Get the closest row (product row)
    const productId = $row.data('id'); // Get the product ID (You should store the ID in a data attribute)

    // Send AJAX request to remove the product
    $.ajax({
        url: '/cart/remove/' + productId, // Laravel route to handle product removal
        type: 'DELETE',
        data: {
            _token: '{{ csrf_token() }}' // Ensure CSRF token is sent with the request
        },
        success: function(response) {
            if (response.success) {
                // Remove the product row from the cart UI
                $row.remove();

                // Recalculate the total price
                updateTotalPrice();
            } else {
                alert('Failed to remove the product.');
            }
        }
    });
});

// Khi nhấn nút giảm số lượng
$('.qty-down').click(function(e) {
    e.preventDefault();
    var $row = $(this).closest('tr'); // Get the closest row
    var $quantityElem = $row.find('.qty-val'); // Find quantity element
	var quantity = parseInt($quantityElem.text()); // Get current quantity
	var priceText = $row.find('.product-price .amount').text().replace(/[^0-9.]/g, ''); // Get price from data attribute
	console.log(quantity)
    // Decrease quantity but not below 1
    if (quantity > 1) {

		const subtotal = (priceText*1) * (quantity*1-1);
		console.log(subtotal);
		$row.find('.product-subtotal .amount').text('$' + subtotal.toFixed(2)); 
		updateTotalPrice();
    }
});


		</script>
		<!-- End Content Pages -->
	</div>
    @endsection