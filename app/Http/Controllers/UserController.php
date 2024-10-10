<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Log;
use App\Services\UserService;
use App\Services\AuthService;
use App\Http\Requests\UserRequest;
use App\Http\Requests\ChangePasswordRequest;
use Illuminate\Support\Facades\Hash;
class UserController
{
    protected $userService ;
    protected $authService;
    public function __construct(UserService $userService , AuthService $authService)
    {
        $this->userService = $userService;
        $this->authService = $authService;
    }
    
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }
    

    /**
     * Display the specified resource.
     */
    

    function showProfile( ){
        $user = $this->authService->getUser();;
        if($user==null) return abort(404,"User does not exist");
        return view('User.Auth.profile',['user'=>$user]);
    }

    

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request)
    {
        $user =$this->authService->getUser();
        if($user==null) return abort(404,"User does not exist");
        $data = [
            'fullname' => $request->input("fullname")
        ];
        $idUser=$user->id;
         $this->userService->update($idUser,$data);
         return back()->with("success","update User successfully");

    }
    public function changePassword(ChangePasswordRequest $request){
        $user=$this->authService->getUser();
        $data=$request->validated();
        if($user==null) return abort(404,"User does not exist");
        if(!Hash::check($data['current_password'],$user->password))
        {
             return back()->with("error","password current not correct");   
        }
        $user->password = Hash::make($data['new_password']);
        $this->userService->update($user->id, $data);
       return back()->with('success', 'Password changed successfully.');

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
