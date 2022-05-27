<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\User;
use App\Models\Shipping;
use App\Models\OrderLines;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Order extends Model
{
    use HasFactory;
    protected $fillable=[
        'user_id',
        'shipping_id',
        'date',
        'discount',
        'state',
        'x',
        'y',
    ];
    /**
     * Get the user that owns the Order
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }

    /**
     * Get the shipping that owns the Order
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function shipping(): BelongsTo
    {
        return $this->belongsTo(Shipping::class);
    }
    /**
     * Get all of the orderline for the Order
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function lines(): BelongsToMany
    {
        return $this->belongsToMany(Product::class,'order_lines')->withPivot('quantity');
    }
}
