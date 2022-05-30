<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\TesteController;
use App\Http\Controllers\UsuarioController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('index');
});

Route::get('/perfil', [HomeController::class, 'perfil']);

Route::get('/politica', [HomeController::class, 'politica']);

Route::get('/termos', [HomeController::class, 'termos']);

Route::post('/login', [UsuarioController::class, 'login'])->name('login');

Route::get('/test', [TesteController::class, 'getTeste']);