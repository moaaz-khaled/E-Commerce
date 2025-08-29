<?php

namespace App\Http\Controllers;

use App\Http\Requests\RegisterRequest;
use App\Models\Role;
use Illuminate\Support\Facades\Hash;

use App\Models\User;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;


class AuthController extends Controller
{
    public function LoginPage(){
        return view('auth.login');
    }

    public function RegisterPage(){
        return view('auth.Register');
    }

    public function register(RegisterRequest $request)
    {
        $newUser = User::create([
            'name' => $request->userName,
            'email' => $request->email,
            'password' => Hash::make($request->password),
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        Auth::login($newUser);
        if($newUser->role == 'admin')
            return redirect('/AdminTest');
        else
            return redirect('/UserTest');
    }

    public function Login(Request $request)
    {
        $user = User::where('email' , $request->email)->first();
        if($user && Hash::check($request->password , $user->password))
        {
            Auth::login($user);
            if($user->role == 'admin')
                return redirect('/Admin/Dashboard');
            else if($user->role == 'user')
                return redirect('/UserTest');
        }
        else {
            return response("Fuck");
        }
    }

    public function logout(Request $request){
        Auth::logout(); // To Destroy This Sessiob

        $request->session()->forget('user');
        $request->session()->regenerateToken();      // To Update Session To Make User in safe

        return redirect('/login');
    }
    // Read More About Auth >> And JWT
}
