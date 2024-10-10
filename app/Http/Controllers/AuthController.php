<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Services\AuthService;
use Illuminate\Routing\Controller;
use App\Http\Requests\UserRequest;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Auth;
use App\Mail\VerifyEmail;
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
       $user= $this->userService->register($data);
        Mail::to($user->email)->send(new VerifyEmail($user));
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
            return redirect()->route('admin.home')->with('success', 'Login successful');
        } else {
            return redirect()->route('home')->with('success', 'Login successful');
        }
    }
    function logOut(){
        Auth::logout();
        return redirect()->route('login');
    }
    

    function showRegister(){
        if(!Auth::check())
        {

            return view('User.Auth.register');
        }
        else {
            return redirect()->route('home');
        }
    }
    function showLogin(){
        if(!Auth::check())
        {

            return view('User.Auth.login');
        }
        else {
            return redirect()->route('home');
        }
    }
    public function showHome()
    {  
         $bestSellingPCGaming=calculateTopSellingProduct("PC Gaming");
        return view('User.home',['bestSellingPCGaming'=>$bestSellingPCGaming]); 
    }
    function showHomeAdmin(){
        return view('Admin.home');
    }
   
}
