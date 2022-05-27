<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class User extends Authenticatable
{
    protected $guarded=['user'];

    use HasApiTokens, HasFactory, Notifiable;

    protected $fillable = [
        'first_name',
        'last_name',
        'email',
        'password',
        'phone_number',
        'active',
        'role'
    ];

    protected $hidden = [
        'password',
        'remember_token',
    ];

    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public function shipping()
    {
        return $this->hasOne(Shipping::class, 'User_ID', 'local_key');
    }

    public function store()
    {
        return $this->hasOne(Store::class);
    }

    public function order()
    {
        return $this->hasMany(Order::class, 'User_ID', 'local_key');
    }

    public function FavoriteProduct()
    {
        return $this->hasMany(FavoriteProduct::class, 'User_ID', 'local_key');
    }

}
