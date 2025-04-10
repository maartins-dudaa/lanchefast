<div class="mt-5">

    @if(session()->has('success'))
    <div class="alert alert-success alert-dismissible fade show" role="alert">
        {{session('success')}}
        <button type="button" class="btn-close"
        data-bs dismiss="alert" aria-label="Close"></button>
    </div>
@endif
    <div class="container" >
    <div class="container">
        <div class="card" >
            <h5 class="card-header" style="background-color:whitesmoke" >Cadastro de Clientes</h5>
            <div class="card-body">
                <form wire:submit.prevent="store">
                    <div class="mb-3">
                        <label for="nome" class="form-label">Nome</label>
                        <input type="text" class="form-control" id="nome" name="nome" 
                        placeholder="Ex: Eduarda" wire:model.deferc="nome">
                    </div>
                    
                    <div class="mb-3">
                        <label for="endereco" class="form-label">Endereco</label>
                        <input type="text" class="form-control" id="endereco" name="endereco" 
                        placeholder="Ex: Rua X, 12-6" wire:model.defer="endereco">
                    </div>
    
                    <div class="mb-3">
                        <label for="telefone" class="form-label">Telefone</label>
                        <input type="text" class="form-control" id="telefone" name="telefone" 
                        placeholder="Ex: (00) 00000-0000" wire:model.defer="telefone">
                        
                    </div>
    
                    <div class="mb-3">
                        <label for="cpf" class="form-label">CPF</label>
                        <input type="text" class="form-control" id="nome" name="cpf" 
                        placeholder="Ex: 000000000-00" wire:model.defer="cpf">
                    </div>
    
                    <div class="mb-3">
                        <label for="email" class="form-label">Email</label>
                        <input type="email" class="form-control" id="email" name="email" 
                        placeholder="Ex: nome@gmail.com" wire:model.defer="email">
                    </div>
    
                    <div class="mb-3">
                        <label for="password" class="form-label">Senha</label>
                        <input type="password" class="form-control" id="password" name="password" 
                         wire:model.defer="password">
                    </div>
    
                    
                    <div class="mb-3">
                        <button type="submit" class="btn btn-success">Cadastrar</button>
                    </div>
    
                </form>
            </div>
        </div>
    </div>
   
</div>