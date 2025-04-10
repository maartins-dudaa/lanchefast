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
        'password'
    ];

    // o hidden serve para ocultar determinados campos 
    // ao exibir os clientes
    protected $hidden = [
        'senha',
        'remember_token'
    ];

    public function edit(Cliente $cliente)
    {
        $this->cliente = $cliente;
        $this->isEditMode = true;
        $this->dispatchBrowserEvent('openModal');
    }
}
