<?php

namespace App\Http\Controllers;

use App\Http\Requests\RegisterRequest;
use Illuminate\Support\Facades\Hash;

use App\Models\User;
use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function LoginPage(){
        return view('auth.login');
    }

    public function RegisterPage(){
        return view('auth.Register');
    }

    public function register(RegisterRequest $request){
        User::create([
            'name' => $request->userName,
            'email' => $request->email,
            'password' => Hash::make($request->password),
        ]);
        return response("Hello World");
    }

}
