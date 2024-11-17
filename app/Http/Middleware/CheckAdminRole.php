<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;
use Illuminate\Support\Facades\Auth;
class CheckAdminRole
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        // Kiểm tra xem người dùng đã đăng nhập chưa và có vai trò admin không
        if (Auth::check() ) {
            $idRoles = Auth::User()->roles->pluck('id')->toArray();
            if (isAdmin($idRoles)) {
            return $next($request); 
            }
            else{
                return redirect()->route('home')->with('error', 'Access denied: Admins only.');
            }
        }

        // Nếu không phải admin, chuyển hướng hoặc trả lỗi
        return redirect()->route('home')->with('error', 'Access denied: Admins only.');
    }
}
