<?php

namespace Database\Seeders;

use App\Models\Role;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\DB;


class UserSeeder extends Seeder
{
    public function run(): void
    {
        // $adminRole = DB::table('roles')->where('role_name' , 'Admin')->first();
        $adminRole = Role::where('role_name','Admin')->first();
        $userRole = Role::where('role_name','User')->first();
        $Admin = User::create([
            'name'=>"Admin",
            'email'=>"Admin@Admin.com",
            'password'=>Hash::make('123456789'),
            'created_at'=>now(),
            'updated_at'=>now(),
        ]);
        $Admin->roles()->attach([$adminRole->id , $userRole->id]);
    }
}

