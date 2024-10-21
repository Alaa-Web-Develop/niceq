<?php

namespace App\Models;

use App\Models\Role;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Admin extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $fillable=[
        'name','username','password','email','active','last_login',
    ];

    
   public function roles()
   {
    return $this->belongsToMany(Role::class,'role_users','admin_id','role_id');
   }
}
