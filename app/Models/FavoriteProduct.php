<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\User;
use App\Models\Product;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class FavoriteProduct extends Model
{
    use HasFactory;
    protected $fillable=['user_id','product_id'];
    /**
     * Get the user that owns the FavoriteProduct
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }
    /**
     * Get the protuct that owns the FavoriteProduct
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function protuct(): BelongsTo
    {
        return $this->belongsTo(Product::class);
    }
}
