<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;
    protected $fillable  = [
        'id',
        'name',
        'slug',
        'banner',
        'is_published',
        'created_at',
        'updated_at'
    ];
    
    public function subcategorys()
    {
        return $this->hasMany(Subcategory::class, 'category', 'id');
    }
}
