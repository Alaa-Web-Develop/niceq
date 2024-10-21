<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;
    protected $fillable = ['category_name', 'icon_img', 'descp', 'parent_category', 'category_level'];

    public function parent()
    {
        return $this->belongsTo(Category::class, 'parent_category');
    }

    public function children()
    {
        return $this->hasMany(Category::class, 'parent_category');
    }
}

//Notes:
//parent_category (Self-referencing One-to-Many Relationship)
//category can have subcategories. In this case, a category can have a parent category, and that parent category can have many child categories.