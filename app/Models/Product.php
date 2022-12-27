<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;
    protected $table = 'products';
    protected $fillable = ['name', 'image', 'price', 'sale', 'category_id', 'status'];
    public function cats()
    {
       return $this->hasOne(Category::class, 'id', 'category_id');
    }
}
