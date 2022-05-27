<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;

class Admin extends Authenticatable
{
    use HasFactory;

    public function test(){
        $guard='admin';
        auth($guard)->attempt(['email'=>'abc@test.com','password'=>'123']);
    }

    protected $guarded=['admin'];

    protected $fillable = [
        'name',
        'email',
        'password'
    ];
}
