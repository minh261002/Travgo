<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProductVariation extends Model
{
    use HasFactory;

    protected $table = 'product_variations';

    protected $guarded = [];

    public function product()
    {
        return $this->belongsTo(Product::class);
    }

    public function variationAttributes()
    {
        return $this->belongsToMany(
            VariationAttribute::class,
            'product_variations_values',
            'product_variation_id',
            'variation_attribute_id'
        )->withPivot('value');
    }



}