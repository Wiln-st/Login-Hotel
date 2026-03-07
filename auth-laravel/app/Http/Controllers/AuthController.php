<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
    public function showLogin()
    {
        return view('login');
    }

    public function showRegister()
    {
        return view('register');
    }

    public function register(Request $request)
    {

        User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
            'role' => 'member',
            'token' => $request->token
        ]);

        return redirect('/login');
    }

    public function login(Request $request)
    {
        $user = User::where('name', $request->name)->first();

        if($user && Hash::check($request->password, $user->password) && $request->token == $user->token){
            
            if($user->role == 'admin'){
                return "SELAMAT DATANG SESEPUH ADMIN !!!";
            }
            if($user->role == 'member'){
                return "KAU MEMBER";
            }
        
        }

        return "CUPU
        NOOB";
    }
}