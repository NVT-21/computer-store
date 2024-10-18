<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;
    protected $fillable = ['name', 'stock', 'price', 'sale_price', 'image_path', 'category_id', 'brand_id'];
    public function category(){
        return $this->belongsTo(Category::class);
    }
    public function sales(){
        return $this->hasMany(Sale::class);
    }
    public function brand()
    {
        return $this->belongsTo(Brand::class);
    }
    public function orders()
    {
        return $this->belongsToMany(Order::class)->withPivot('quantity')->withTimestamps();
    }
}
