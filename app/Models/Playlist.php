<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Playlist extends Model
{
    use HasFactory;
    protected $fillable = ['title', 'user_id'];

    public function videos()
    {
        return $this->belongsToMany(Video::class, 'playlist_videos', 'playlist_id', 'video_id');
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
