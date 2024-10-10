@extends('layouts.app')

@section('content')
<div class="container">
    <h2>Verify Your Account</h2>

    @if (session('error'))
        <div class="alert alert-danger">{{ session('error') }}</div>
    @endif

    <form action="{{ route('verification.verify') }}" method="POST">
        @csrf
        <div class="form-group">
            <label for="email">Email Address:</label>
            <input type="email" name="email" class="form-control" required>
        </div>

        <div class="form-group">
            <label for="otp_code">Verification Code:</label>
            <input type="text" name="otp_code" class="form-control" required>
        </div>

        <button type="submit" class="btn btn-primary">Verify</button>
    </form>
</div>
@endsection
