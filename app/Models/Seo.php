<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Seo extends Model
{
    use HasFactory;
    protected $fillable = ['seo_title', 'seo_keywords', 'seo_description'];

    public function content()
    {
        return $this->morphTo();
    }
}


//The morphTo() method is used in polymorphic relationships, where a model can belong to more than one other model on a single association. It’s particularly useful when a table references different models (e.g., comments can belong to either videos or images).