<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UsuarioController extends Controller
{
    public function login(Request $request)
    {
        
        $senha = md5($request->pass);

        return $senha;

        //return view('perfil');
    }

    public function createUser(Request $request)
    {
        return $request;
    }

    public function getUser(Request $request)
    {
        return $request;
    }
}
