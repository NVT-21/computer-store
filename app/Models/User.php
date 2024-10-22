<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable; // Sử dụng lớp này cho đăng nhập
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    use HasFactory, Notifiable;
    protected $fillable = [
        'fullname',
        'email',
        'password',
        'address',
        'birthday',
        'imagePath'
    ];
    public function people()
    {
        return $this->hasOne(People::class);
    }
    public function roles()
    {
        return $this->belongsToMany(Role::class);
    }
    public function orders()
    {
        return $this->hasMany(Order::class);
    }
}
