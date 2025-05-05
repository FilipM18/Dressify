<?php

namespace App\Models;


use Illuminate\Database\Eloquent\Model;
use App\Models\Review;

class Product extends Model
{
    protected $table = 'products';
    protected $primaryKey = 'product_id';
    public $timestamps = false;
    public $updated_at = null;

    protected $casts = [
        'image_url' => 'array',
        'active' => 'boolean'
    ];

    protected $fillable = [
        'brand_id',
        'name',
        'description',
        'price',
        'gender',
        'type',
        'image_url',
        'created_at',
        'active'
    ];

    // Relationships
    public function variants()
    {
        return $this->hasMany(ProductVariant::class, 'product_id', 'product_id');
    }

    public function brand()
    {
        return $this->belongsTo(Brand::class, 'brand_id', 'brand_id');
    }
    // Na reviews pre produkt
    public function reviews()
    {
        return $this->hasMany(Review::class, 'product_id', 'product_id');
    }

    public function recalculateRating()
    {
        //ešte pozri či nedať do controlleru
        $avgRating = $this->reviews()->avg('rating') ?: 0;
        $reviewCount = $this->reviews()->count();

        return $avgRating;
    }
    public function getFirstImageAttribute()
    {
    if (empty($this->image_url)) {
        return 'no-image.jpg';
    }

    $images = is_array($this->image_url) 
        ? $this->image_url 
        : (is_string($this->image_url) ? json_decode($this->image_url, true) : []);

    return is_array($images) && !empty($images) ? $images[0] : 'no-image.jpg';
    }

    public function getAllImagesAttribute()
    {
    if (empty($this->image_url)) {
        return [];
    }

    if (is_string($this->image_url)) {
        return json_decode($this->image_url, true) ?: [];
    }

    return is_array($this->image_url) ? $this->image_url : [];
    }
}