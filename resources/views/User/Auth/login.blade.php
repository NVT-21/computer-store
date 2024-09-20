@extends('layouts.app')
@section('title', 'Login')

@section('content')
<div id="content">
		<div class="content-page woocommerce">
			<div class="container">
				<div class="row">
					<div class="col-md-12">
						<h2 class="title-shop-page dark font-bold dosis-font">Member</h2>
						<div class="register-content-box">
							<div class="row">
								<div class="col-md-6 col-sm-6 col-ms-12">
									<div class="check-billing">
										<div class="form-my-account">
											<form class="block-login"  action="{{ route('api.login') }}" method="Post">
												@csrf
												<h2 class="title24 title-form-account">Login</h2>
												<p>
													<label> Email address <span class="required">*</span></label>
													<input type="text" name="email" />
												</p>
												<p>
													<label>Password <span class="required">*</span></label>
													<input type="password" name="password" />
												</p>
												<p>
													<input type="submit" class="register-button" name="login" value="Login">
												</p>
												<div class="table-custom create-account">
													<div class="text-left">
														<p>
															<input type="checkbox"  id="remember" /> <label for="remember">Remember me</label>
														</p>
													</div>
													<div class="text-right">
														<a href="#" class="color">Lost your password?</a>
													</div>
												</div>
												<h2 class="title18 social-login-title">Or login with</h2>
												<div class="social-login-block table-custom text-center">
													<div class="social-login-btn">
														<a href="#" class="login-fb-link">Facebook</a>
													</div>
													<div class="social-login-btn">
														<a href="#" class="login-goo-link">Google</a>
													</div>
												</div>
											</form>
										</div>
									</div>
								</div>
								<div class="col-md-6 col-sm-6 col-ms-12">
									<div class="check-address">
										<div class="form-my-account check-register text-center">
											<h2 class="title24 title-form-account">Register</h2>
											<p class="desc">Registering for this site allows you to access your order status and history. Just fill in the fields below, and we’ll get a new account set up for you in no time. We will only ask you for information necessary to make the purchase process faster and easier.</p>
											<a href="/register" class="shop-button bg-color " data-login="Login" data-register="Register">Register</a>
											<p class="desc title12 silver"><i>Click to switch Register/Login</i></p>
										</div>
									</div>		
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!-- End Content Page -->
	</div>

	

  
@endsection
