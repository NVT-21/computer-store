<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;
use Illuminate\Support\Facades\Auth;
class IsVerifiedEmail
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {   if (!Auth::check()) {
        // Nếu chưa đăng nhập, chuyển hướng về trang đăng nhập
        return redirect()->route('login')->with('error', 'Please log in first.');
    }

    // Kiểm tra nếu người dùng chưa xác minh email
    if (!Auth::user()->is_verified) {
        return redirect()->route('login')->with('error', 'Please verify your email first.');
    }
        return $next($request);
    }
}
