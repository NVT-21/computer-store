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
      
        $idRoles = $result->roles->pluck('id')->toArray();
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
    try {
        $bestSellingPCGamingResponse = calculateTopSellingProduct("PC Gaming");
        $bestSellingLapTopResponse = calculateTopSellingProduct("LapTop");

        // Decode the responses to access their data
        $bestSellingPCGaming = $bestSellingPCGamingResponse->getData();
        $bestSellingLapTop = $bestSellingLapTopResponse->getData();
        if (isset($bestSellingPCGaming->error) || isset($bestSellingLapTop->error)) {
            $bestSellingPCGamingResponse = null;
            $bestSellingLapTopResponse = null;
            $error = "Unable to fetch top-selling products.";
        }
    } catch (\Exception $e) {
        // Handle general exceptions
        $bestSellingPCGaming = null;
        $bestSellingLapTop = null;
        $error = "Unable to fetch top-selling products.";
    }

    // Pass data to the view
    return view('User.home', [
        'bestSellingPCGaming' =>  $bestSellingPCGamingResponse,
        'bestSellingLapTop' =>  $bestSellingLapTopResponse,
        'error' => $error ?? null,
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
