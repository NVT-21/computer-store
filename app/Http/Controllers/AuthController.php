<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Services\AuthService;
use App\Services\ProductService;
use Illuminate\Routing\Controller;
use App\Http\Requests\UserRequest;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Auth;
use App\Mail\VerifyEmail;
use Session;

class AuthController extends Controller
{
    protected $userService ;
    protected $productService ;
    public function __construct(AuthService $userService,ProductService $productService)
    {
        $this->userService = $userService;
        $this->productService = $productService;
    }
    function register(UserRequest $request){
        $data =  $request->validated();
       $user= $this->userService->register($data);
        Mail::to($user->email)->send(new VerifyEmail($user));
        return redirect()->route('verification.verify')->with("user", $user);
        // return back()->with('success', "Register successfully");
    }
    
    function login(Request $request)
    {
        $credentials = $request->only('email', 'password');
       
        $result = $this->userService->login($credentials);
        if (!$result['success']) {
            return back()->with('error', $result['message'])->withInput($request->only('email'));
        }
        $idRoles = $result['user']->roles->pluck('id')->toArray();
        if (isAdmin($idRoles)) {
            return redirect()->route('product.index')->with('success', 'Login successful');
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
    $PC=$this->productService->getProductsByNameCategory("PC");
    $Laptop=$this->productService->getProductsByNameCategory("LapTop");
    
    return view('User.home', [
        'bestSellingPCGaming' =>$PC  ,
        'bestSellingLapTop' =>$Laptop  ,
    ]);
}

    function showHomeAdmin(){
        return view('Admin.home');
    }
    public function showVerifiedPassword(){
        return view('User.Auth.verified-password');
    }
    public function verifyEmail(Request $request){
        $result=$this->userService->verifiedPassword($request->all());
        if($result['success']){
            return redirect()->route('login')->with("success","Successfully verified");
        }
        else {
            return back()->with("error","Failed to verify");
        }

    }
   
}
