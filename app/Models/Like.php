<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Like extends Model
{
    use HasFactory;
    protected $fillable = ['user_id', 'video_id', 'sound_id', 'image_id', 'comment_id', 'like_type'];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

}
