<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User;

class Role extends Model
{
    public $timestamps = false;

    public function users(){
        return $this->belongsToMany(User::class , 'user_role' , 'user_id' , 'role_id');
    }
}
