<?php 
namespace App\Services;

use App\Repositories\UserRepository;
use App\Models\User;
use App\Models\Role;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;
Class AuthService 
{
    protected $userRepository;

    public function __construct(UserRepository $userRepository)
    {
        $this->userRepository = $userRepository;
    }
    public function register($data){
        
        $data['password'] = Hash::make($data['password']);
        $newUser= $this->userRepository->create($data);
        $newUser->roles()->attach(Role::ROLE_USER);
        $otpCode = Str::random(6);
        $newUser->email_verification_code = $otpCode;
        $newUser->save();
        return $newUser;

    }
    public function login($credentials)
    {
        // Sử dụng Auth::attempt() để kiểm tra thông tin đăng nhập
        if (Auth::attempt($credentials)) {
            if(!Auth::user()->is_verified)
            {
                Auth::logout();
                return [
                    'success' => false,
                   'message' => "User is not verified",
                ];
            }
            return Auth::user();
        } else {
            // Đăng nhập thất bại
            return [
                'success' => false,
               'message' => "Invalid email or password",
            ];
        }
    }
    public function getUser(){
        if(Auth::check())
        {
            return Auth::user();
        }
        else {
           return null;
        }
    }
    public function verifiedPassword($data)
    {
        $otpCode =$data['otp_code'];
        $email = $data['email'];
        $user = $this->userRepository->findByEmailVerificationCode($email,$otpCode);
        if($user)
        {
            $user->is_verified=true;
            $user->save();
                return [
                    'success' => true,
                    'message' => "verify successfully",
                ];
        }
        else {
            return [
                'success' => false,
                'message' => "verify failed",
            ];

        }
    }
    
}