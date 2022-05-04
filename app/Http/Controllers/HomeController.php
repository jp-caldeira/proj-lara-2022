<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function perfil(){
        return view('perfil');
    }

    public function politica(){
        return view('politica');
    }

    public function termos(){
        return view('termos');
    }
}
