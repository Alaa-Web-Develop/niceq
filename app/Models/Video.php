<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Video extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $fillable = ['title', 'descp', 'category_id', 'sub_domain_no', 'icon_image', 'file_name', 'duration', 'views'];

    public function category()
    {
        return $this->belongsTo(Category::class);
    }
}
