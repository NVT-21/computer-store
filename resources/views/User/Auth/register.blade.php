@extends('layouts.app')
@section('title', 'Register')

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
											<form class="block-login" action="{{ route('api.register') }}" method="POST">
												@csrf
												<h2 class="title24 title-form-account">REGISTER</h2>
												<p>
													<label>FullName <span class="required">*</span></label>
													<input type="text" name="fullname" />
												</p>
												<p>
													<label>Email address <span class="required">*</span></label>
													<input type="text" name="email" />
													@if ($errors->has('email'))
														<span class="text-danger">{{ $errors->first('email') }}</span>
													@endif
												</p>
												<p>
													<label>Address <span class="required">*</span></label>
													<input type="text" name="address" />
													@if ($errors->has('address'))
														<span class="text-danger">{{ $errors->first('address') }}</span>
													@endif
												</p>
												<p>
													<label>Date of Birth <span class="required">*</span></label>
													<input type="date" name="birthday" />
													@if ($errors->has('birthday'))
														<span class="text-danger">{{ $errors->first('birthday') }}</span>
													@endif
												</p>

												<p>
													<label>Password <span class="required">*</span></label>
													<input type="password" name="password" />
                                                        @if ($errors->has('password'))
                                                        <span class="text-danger">
                                                            {{ $errors->first('password') }}
                                                        </span>
                                                    @endif

												</p>
                                                <p>
                                                <label for="password_confirmation">Confirm Password:</label>
                                                <input type="password" id="password_confirmation" name="password_confirmation" required>
												</p>
												<p>
													<input type="submit" class="register-button" name="register" value="Register">
												</p>
											</form>
										</div>
									</div>
								</div>
								<div class="col-md-6 col-sm-6 col-ms-12">
									<div class="check-address">
										<div class="form-my-account check-register text-center">
											<h2 class="title24 title-form-account">Login</h2>
											<a href="/login" class="shop-button bg-color " data-login="Login" data-register="Register">Login</a>
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
