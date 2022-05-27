<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Order;
use App\Models\Product;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class OrderLines extends Model
{
    use HasFactory;
    protected $fillable=['order_id','product_id','quantity'];
    /**
     * Get the Order that owns the orderline
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function Order(): BelongsTo
    {
        return $this->belongsTo(Order::class);
    }

    /**
     * Get the product that owns the orderline
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function product(): BelongsTo
    {
        return $this->belongsTo(Product::class);
    }
}
