<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cliente extends Model
{
    use HasFactory;
    protected $fillable = [
        'nome',
        'endereco',
        'telefone',
        'cpf',
        'email',
        'senha'
    ];

    // o hidden serve para ocultar determinados campos 
    // ao exibir os clientes
    protected $hidden = [
        'senha',
        'remember_token'
    ];
}
