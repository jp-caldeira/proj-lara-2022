<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UsuarioController extends Controller
{

    public function editUser(Request $request)
    {
        return $request;
    }

    public function getUser(Request $request)
    {
        $user = User::find($request->id);

        return $user;
    }

    public function allUsers()
    {
        $user = User::find(1);

        return $user->servicos;
    }
}
