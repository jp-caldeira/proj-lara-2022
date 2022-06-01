<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Usuario;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class LoginController extends Controller
{
    public function login(Request $request)
    {
        $request->validate([
            'email' => 'required|string|email',
            'password' => 'required|string'
        ]);

        $credentials = $request->only('email', 'password');

       if (Auth::attempt($credentials)){
           return view('perfil');
       }

       return redirect()->route('index');
      
    }

    public function logout(Request $request)
    {
        Auth::logout();

        return redirect()->route('index');
    }
}
