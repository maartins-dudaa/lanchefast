<?php

namespace App\Livewire\Clientes;

use App\Models\Cliente;
use Livewire\Component;
use WithPagination;

class Index extends Component

{
    public $search = '';
    public $perPage = 10;
    public $clienteId;
    public $nome;
    public $endereco;
    public $telefone;


    protected $queryString = [
        'search' => ['except' => ' '],
        'perPage' => ['except' => 10],
    ];

    

 

    public function render()
    {
        $clientes = Cliente::where('nome', 'like', "%{$this->search}")
        ->orWhere('email', 'like', "%{$this->search}")
        ->orWhere('cpf', 'like', "%{$this->search}")
        ->paginate($this->perPage);

        return view('livewire.clientes.index', compact('clientes'));

       
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


            $this->dispatch('clienteAtualizado');
            
            session()->flash('message', 'Cliente Editado');
        }
}

    public function delete($id){
        Cliente::findOrFail($id)->delete();
        session()->flash('message', 'Cliente deletado com sucesso');
    }

    public function abrirModalEdicao($clienteId){
        $this->dispatch('editarCliente', clienteId: $clienteId);
    }
}
