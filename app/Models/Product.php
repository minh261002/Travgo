<?php

namespace App\Models;

use App\Enums\ActiveStatus;
use App\Supports\Sluggable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory, Sluggable;

    protected $guarded = [];

    protected $table = 'products';

    protected $casts = [
        'status' => ActiveStatus::class
    ];

    public function variations()
    {
        return $this->hasMany(ProductVariation::class, 'product_id');
    }

    public function attributes()
    {
        return $this->belongsToMany(VariationAttribute::class, 'product_variations_values', 'product_variation_id', 'variation_attribute_id')
            ->withPivot('value')
            ->withTimestamps();
    }

    public function categories()
    {
        return $this->belongsToMany(Category::class, 'products_categories', 'product_id', 'category_id');
    }

}