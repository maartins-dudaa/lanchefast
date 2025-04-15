<?php

namespace App\Livewire\Clientes;

use App\Models\Cliente;
use Livewire\Component;

class Edit extends Component
{

    public $clienteId;
    public $nome;
    public $endereco;
    public $telefone;

    protected $listeners =
    [
        'editarCliente',
        
    ];

  


    public function mount($id){
        $cliente = Cliente::find($id);

        $this->clienteId = $cliente->id;
        $this->nome = $cliente->nome;
        $this->endereco = $cliente->endereco;
        $this->telefone = $cliente->telefone;
    }

    public function render()
    {
        return view('livewire.clientes.edit');
    }

    public function Edit($clienteId){
        $cliente = Cliente::find($clienteId);
        $this->clienteId = $cliente->clieteId;
        $this->nome = $cliente->nome;
        $this->endereco = $cliente->endereco;
        $this->telefone = $cliente->telefone;
        
       

       

    }

    public function salvar()
    {
       $cliente = Cliente::find($this->clienteId);
        
        if ($cliente) {
            $cliente->update([
                'nome' => $this->nome,
                'endereco' => $this->endereco,
                'telefone' => $this->telefone
            ]);

            return redirect()->route('clientes.index')->with(['message'=>'atualizado com sucesso']);
        }
}

}