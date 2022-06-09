<?php

namespace App\Http\Controllers;

use App\Models\Produto;
use App\Models\Servico;
use App\Models\TestTable;
use App\Models\User;
use App\Models\UserProduto;
use App\Models\UserServico;
use DateTime;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class TesteController extends Controller
{
    public function getTeste()
    {
        return TestTable::all();
    }

    public function hash()
    {
        $hash = Hash::make("1234");

        return $hash;
    }

    public function getUsuarios()
    {
        $user = User::find(1);

        return $user;

        $user->empresa = "Empresa 1";
        $user->telefone = "11552452556";
        $user->created_at = new DateTime();

        $user->save();

    }

    public function jsonBackup()
    {
        // $infos = UserServico::all();

        // $infos = json_encode($infos);
        // file_put_contents('user-servicos.json', $infos);

        // $infos = UserProduto::all();

        // $infos = json_encode($infos);
        // file_put_contents('user-produtos.json', $infos);

        //dd(public_path('produtos.json'));
        $infos = json_decode(file_get_contents('user-servicos.json'));
        $infos = collect($infos);
        $infos = $infos->sortBy('id');
        dd($infos);
        $users = User::all();
        return $users;
    }
}
