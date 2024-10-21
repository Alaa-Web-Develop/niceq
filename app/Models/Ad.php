<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ad extends Model
{
    use HasFactory;
    protected $fillable = ['ad_title', 'ad_description', 'ad_image', 'url','active'];

    public function categories()
    {
        return $this->belongsToMany(Category::class, 'category_ads');
    }
}
