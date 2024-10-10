@extends('layouts.app')

@section('content')
<div class="container">
    <h2>Verify Your Account</h2>

    @if (session('error'))
        <div class="alert alert-danger">{{ session('error') }}</div>
    @endif

    <form action="{{ route('verification.verify') }}" method="POST">
        @csrf
        @if(session('user'))
            <div class="form-group">
                <label for="email">Email Address:</label>
                <input type="email" name="email" value="{{ session('user')->email }}" class="form-control" readonly>
            </div>
        @endif

        <div class="form-group">
            <label for="otp_code">Verification Code:</label>
            <input type="text" name="otp_code" class="form-control" required>
        </div>

        <button type="submit" class="btn btn-primary">Verify</button>
    </form>
</div>
@endsection
