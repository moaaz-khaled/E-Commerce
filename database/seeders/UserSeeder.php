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
        $Admin = User::create([
            'name'=>"Admin",
            'email'=>"Admin@Admin.com",
            'password'=>Hash::make('123456789'),
            'role' => "admin",
            'created_at'=>now(),
            'updated_at'=>now(),
        ]);
    }
}

