<?php

namespace App\Http\Controllers;

use App\Http\Requests\RegisterRequest;
use App\Models\Role;
use Illuminate\Support\Facades\Hash;

use App\Models\User;
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
        ]);

        $roleID = Role::where('role_name' , 'User')->first()->id;
        $newUser->roles()->attach($roleID);

        Auth::login($newUser);
        return redirect('/Test');
    }

    public function Login(Request $request)
    {
        $user = User::where('email' , $request->email)->first();
        if($user && Hash::check($request->password , $user->password)) {
            Auth::login($user); // To Create Session
            return response("Hello ," . $user->name);
        }
        else {
            return "Fuck You";
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
