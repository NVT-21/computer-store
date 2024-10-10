<?php 
namespace App\Repositories;
use App\Models\User;
class UserRepository extends BaseRepository {
    function getModel(){
        return User::class ;
    }
    function findByEmailVerificationCode($email ,$otpCode)
    {
        return User::where('email',$email)
                            ->where('email_verification_code',$otpCode)
                            ->first();
        
    }
}