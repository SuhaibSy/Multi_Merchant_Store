<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Foundation\Auth\User as Authenticatable;

class Store extends Authenticatable
{
    use HasFactory;

    protected $fillable=[
        'user_id',
        'store_name',
        'description',
        'address',
        'x',
        'y'
    ];

    public function products(){
        return $this->hasMany(Product::class);
    }

    public function user() {
        return $this->belongsTo(User::class);
    }
}
