<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Category;
use App\Models\Subcategory;
class Subsubcategory extends Model
{
    use HasFactory;
    protected $fillable  = [
        'id',
        'category',
        'subcategory',
        'subsubcategory',
        'slug',
        'created_at',
        'updated_at'
    ];

    public function categorys()
    {
        return $this->hasOne(Category::class, 'id', 'category');
    }

    public function subcategorys()
    {
        return $this->hasOne(Subcategory::class, 'id', 'subcategory');
    }



}
