<?php 
namespace App\Repositories;
use App\Models\User;
class UserRepository extends BaseRepository {
    function getModel(){
        return User::class ;
    }
}