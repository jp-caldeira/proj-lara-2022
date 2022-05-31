<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;


class Usuario extends Authenticatable
{
    use HasFactory;

    protected $fillable = [
        'nome_completo',
        'email',
        'senha',
        'empresa',
        'telefone',
        'created_at'
    ];

    protected $hidden = [
        'senha', 
        'remember_token'
    ];

}
