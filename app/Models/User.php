<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use App\Models\Role;
use Laravel\Sanctum\HasApiTokens;
use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

   use SoftDeletes;
    protected $fillable = [
        'name',
        'email',
        'password',
        'username',
        'avatar', 'phone', 'active'
    ];
  

   public function roles()
   {
    return $this->belongsToMany(Role::class,'role_users','user_id','role_id');
   }


    // public function tokens()
    // {
    //     return $this->hasMany(OAuthAccessToken::class);
    // }

    
    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];
}
