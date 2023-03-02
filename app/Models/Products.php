<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Category;
use App\Models\Subcategory;
use App\Models\Subsubcategory;
class Products extends Model

{
    use HasFactory;
    protected $fillable  = [
        'id',
        'product',
        'slug',
        'category',
        'subcate_id',
        'subsubcate_id',
        'price',
        'logo',
        'is_published',
        'created_at',
        'updated_at'
    ];

    public function categorys()
    {
        return $this->hasOne(Category::class, 'id', 'category');
    }

    public function subcategorys()
    {
        return $this->hasOne(Subcategory::class, 'id', 'subcate_id');
    }

    public function subsubcategorys()
    {
        return $this->hasOne(Subsubcategory::class, 'id', 'subsubcate_id');
    }

    


}