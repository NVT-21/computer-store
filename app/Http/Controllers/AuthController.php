<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Services\AuthService;
use Illuminate\Routing\Controller;
use App\Http\Requests\UserRequest;
use Session;

class AuthController extends Controller
{
    protected $userService ;
    public function __construct(AuthService $userService)
    {
        $this->userService = $userService;
    }
    function register(UserRequest $request){
        $data =  $request->validated();
        $this->userService->register($data);
        return back()->with('success', "Register successfully");
    }
    
    function login(Request $request)
    {
        $credentials = $request->only('email', 'password');
        
        // Gọi service để đăng nhập
        $user = $this->userService->login($credentials);
        
        // Kiểm tra nếu đăng nhập thất bại
        if (!$user) {
            return back()->with('error', 'Invalid email or password')->withInput($request->only('email'));
        }
        
        // Lấy danh sách role của user
        $idRoles = $user->roles->pluck('id')->toArray();
        
        // Thông báo đăng nhập thành công
       
        
        // Kiểm tra nếu user là admin
        if (isAdmin($idRoles)) {
            return redirect()->route('admin.home')->with('success', 'login success');
        } else {
            return redirect()->route('home')->with('success', 'login success');
        }
    }
    

    function showRegister(){
        return view('User.Auth.register');
    }
    function showLogin(){
        return view('User.Auth.login');
    }
    public function showHome()
    {
        return view('User.home'); 
    }
    function showHomeAdmin(){
        return view('Admin.home');
    }
   
}
