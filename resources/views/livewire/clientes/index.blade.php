<div class="container mt-4" style="font-family: 'Poppins', sans-serif;">
    <div class="row mb-3 align-items-center">
        <div class="col-md-6">
            <h2 class="fw-bold text-danger-emphasis">🍔 Clientes</h2>
        </div>
        <div class="col-md-6 text-end">
            <a href="{{ route('clientes.create') }}" class="btn btn-warning fw-bold rounded-pill px-4" style="background-color: #ff7043; border: none; color: white;">
                ➕ Novo Cliente
            </a>
        </div>
    </div>

    <div class="card shadow-lg" style="border: 3px solid #ff7043; border-radius: 20px; background-color: #fff8e1;">
        <div class="card-body">
            <div class="row mb-4 align-items-center">
                <div class="col-md-6">
                    <input type="text" wire:model.debounce.300ms="search" class="form-control rounded-pill p-3"
                        placeholder="🔍 Buscar Clientes...">
                </div>
                <div class="col-md-3 mt-2 mt-md-0">
                    <select wire:model="perPage" class="form-select rounded-pill p-2">
                        <option value="10">10 por página</option>
                        <option value="25">25 por página</option>
                        <option value="50">50 por página</option>
                        <option value="100">100 por página</option>
                    </select>
                </div>
            </div>

            @if (session()->has('message'))
                <div class="alert alert-success text-center fw-semibold">
                    {{ session('message') }}
                </div>
            @endif

            <div class="table-responsive">
                <table class="table table-striped text-center align-middle">
                    <thead class="table-warning">
                        <tr>
                            <th>👤 Nome</th>
                            <th>🧾 CPF</th>
                            <th>📧 Email</th>
                            <th>📞 Telefone</th>
                            <th>🍟 Ações</th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse($clientes as $cliente)
                            <tr>
                                <td>{{ $cliente->nome }}</td>
                                <td>{{ $cliente->cpf }}</td>
                                <td>{{ $cliente->email }}</td>
                                <td>{{ $cliente->telefone }}</td>
                                <td>
                                    <a href="{{ route('clientes.show', $cliente->id) }}" class="btn btn-sm btn-info rounded-pill px-3 me-1">
                                        👁
                                    </a>

                                    <a href="{{ route('clientes.edit', $cliente->id) }}" class="btn btn-sm btn-warning rounded-pill px-3 me-1" style="background-color: #ffb300; border: none; color: white;">
                                        ✏️ 
                                    </a>

                                    <button wire:click="delete({{ $cliente->id }})" class="btn btn-sm btn-danger rounded-pill px-3" onclick="return confirm('Tem certeza?')">
                                        🗑 
                                    </button>
                                </td>
                            </tr>
                        @empty
                            <tr>
                                <td colspan="5" class="text-center text-muted">Nenhum cliente encontrado 🍔</td>
                            </tr>
                        @endforelse
                    </tbody>
                </table>
            </div>

            <div class="mt-3 d-flex justify-content-center">
                {{ $clientes->links() }}
            </div>
        </div>
    </div>
</div>
