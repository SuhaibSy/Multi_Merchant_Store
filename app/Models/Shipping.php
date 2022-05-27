<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Order;
use App\Models\User;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Foundation\Auth\User as Authenticatable;

class Shipping extends Authenticatable
{
    use HasFactory;

    protected $fillable=[
        'name',
        'email',
        'password',
        'rate',
    ];

}
