<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    public function perfil()
    {
        
        if(Auth::user()){
            return Auth::user();
            //return view('perfil');
        } else {
            return "nope";
            //return redirect()->route('index');
        }

        
    }

    public function politica(){
        return view('politica');
    }

    public function termos(){
        return view('termos');
    }
}
