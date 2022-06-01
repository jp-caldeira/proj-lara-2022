<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use DateTime;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class RegisterController extends Controller
{
    public function create(Request $request)
    {
        $validator = Validator::make($request->all(),[
            'email' => 'required|email|unique:usuarios',
            'nome_completo' => 'required|string',
            'password' => 'required|string|min:6'
        ]);


        if($validator->fails()){
            return redirect()->route('index')->withErrors($validator);
        } 

        $usuario = new User();

        $usuario->email = $request->email;
        $usuario->nome_completo = $request->nome_completo;
        $usuario->password = Hash::make($request->password);
        $usuario->empresa = $request->empresa;
        $usuario->telefone = $request->telefone;
        $usuario->created_at = new DateTime();

        $usuario->save();

        $credentials = $usuario->only('email', 'password');

        if (Auth::attempt($credentials)){
           return view('perfil');
       }

        return redirect()->route('view');

    }
}
