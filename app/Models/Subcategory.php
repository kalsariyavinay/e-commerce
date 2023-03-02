<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Category;
use App\Models\Products;
class Subcategory extends Model
{
    use HasFactory;
    protected $fillable  = [
        'id',
        'subcategory',
        'slug',
        'category',
        'logo',
        'created_at',
        'updated_at'
    ];

    public function categorys()
    {
        return $this->hasOne(Category::class, 'id', 'category');
    }

    public function products()
    {
        return $this->hasMany(Products::class, 'subcate_id', 'id')->where('is_published',1);
        
    }
}
