<?php

namespace App\Http\Controllers;

use App\Models\TestTable;
use Illuminate\Http\Request;

class TesteController extends Controller
{
    public function getTeste()
    {
        return TestTable::all();
    }
}
