<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Section;
use App\Models\FavoriteProduct;
use App\Models\OrderLines;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Product extends Model
{
    use HasFactory;
    protected $fillable=[
        'store_id',
        'name',
        'quantity',
        'price',
        'image',
        'details',
        'section_id',
        'available',
    ];

public function store():BelongsTo{
return $this->belongsTo(Store::class);
}
    public function section(): BelongsTo
    {
        return $this->belongsTo(Section::class);
    }
    public function orders(): BelongsToMany
    {
        return $this->belongsToMany(Order::class,'order_lines')->withPivot('quantity');
    }

}
