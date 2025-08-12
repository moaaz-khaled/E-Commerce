<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User;

class Role extends Model
{
    public $timestamps = false;
    public $fillable = ['role_name'];

    public function users(){
        return $this->belongsToMany(User::class , 'user_role' , 'role_id' , 'user_id');
    }
}
