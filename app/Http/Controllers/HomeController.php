<?php

namespace App\Http\Controllers;

use App\Models\Produto;
use App\Models\Servico;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    public function index()
    {
        $produtos = Produto::all();
        $servicos = Servico::all();

        return view('index', ['produtos' => $produtos, 'servicos' => $servicos]);
    }

    public function perfil()
    {
        
        if(Auth::user()){
            //return Auth::user();
            return view('perfil');
        } else {
            return redirect()->route('index');
        }

        
    }

    public function politica(){
        return view('politica');
    }

    public function termos(){
        return view('termos');
    }
}
