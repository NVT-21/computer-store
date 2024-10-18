@extends('layouts.app')
@section('title', 'My-Profile')

@section('content')
<div id="content">
		<div class="content-page woocommerce">
			<div class="container">
				<div class="row">
					<div class="col-md-12">
						<h2 class="title-shop-page dark font-bold dosis-font">My Profile</h2>
						<div class="my-profile-box register-content-box">
							<div class="form-my-account">
							<form action="{{ route('api.userUpdate')}}" method="POST">
								@csrf
								@method('PUT') <!-- Sử dụng @method('PUT') nếu bạn muốn gửi yêu cầu PUT -->

								<div class="row">
									<div class="col-md-6 col-sm-6 col-xs-12">
										<p>
											<label>Username <span class="required">*</span></label>
											<input style="font-weight: bold; color:black;" type="text" name="fullname" value="{{ $user->fullname }}" required />
										</p>
									</div>
								</div>
								<p>
									<label>Email address <span class="required">*</span></label>
									<input type="text" name="email" value="{{ $user->email }}" readonly/>
								</p>

								<p>
									<input type="submit" class="register-button save-change" name="register" value="Save Changes">
								</p>
							</form>

								<h3 class="title18 title-change-pasword">Password change</h3>
								<form action="{{ route('api.userChangePassword') }}" method="POST">
							@csrf
							@method('PUT')
							<p>
								<label>Current password (leave blank to leave unchanged)</label>
								<input type="password" name="current_password" />
								@if ($errors->has('current_password'))
									<span class="text-danger">{{ $errors->first('current_password') }}</span>
								@endif
							</p>

							<p>
								<label>New password (leave blank to leave unchanged)</label>
								<input type="password" name="new_password" />
								@if ($errors->has('new_password'))
									<span class="text-danger">{{ $errors->first('new_password') }}</span>
								@endif
							</p>

							<p>
								<label>Confirm new password</label>
								<input type="password" name="new_password_confirmation" />
								@if ($errors->has('new_password_confirmation'))
									<span class="text-danger">{{ $errors->first('new_password_confirmation') }}</span>
								@endif
							</p>

							<p>
								<input type="submit" class="register-button save-change" name="register" value="Save Changes">
							</p>
						</form>

							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!-- End Content Page -->
	</div>
    @endsection