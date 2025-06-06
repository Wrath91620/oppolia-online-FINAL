<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class ProductDescription extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $fillable = [
        'product_id', 'description', 'description_ar', 'images'
    ];

    /**
     * Get the product that owns the description.
     */
    public function product()
    {
        return $this->belongsTo(Product::class);
    }
}
