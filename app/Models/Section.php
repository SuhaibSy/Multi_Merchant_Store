<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Product;
class Section extends Model
{
    use HasFactory;
    protected $fillable=['Name','Image'];
    /**
     * Get all of the product for the section
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function product(): HasMany
    {
        return $this->hasMany(Product::class, 'Section_ID', 'local_key');
    }
}
