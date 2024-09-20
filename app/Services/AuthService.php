<?php 
namespace App\Services;

use App\Repositories\UserRepository;
use App\Models\User;
use App\Models\Role;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

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
        return $newUser;

    }
    public function login($credentials)
    {
        // Sử dụng Auth::attempt() để kiểm tra thông tin đăng nhập
        if (Auth::attempt($credentials)) {
            // Trả về đối tượng người dùng hiện tại sau khi đăng nhập thành công
            return Auth::user();
        } else {
            // Đăng nhập thất bại
            return null;
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
    
}