<div class="d-flex justify-content-center align-items-center" style="min-height: 100vh; background: linear-gradient(135deg, #fff3e0, #ffcc80); font-family: 'Poppins', sans-serif;">
    <div class="card shadow-lg" style="width: 100%; max-width: 480px; border-radius: 25px; padding: 30px; background-color: #fff8e1; border: 3px solid #ff7043;">

        <div class="text-center mb-4">
            <img src="https://i.imgur.com/Wv8VqHf.png" alt="LancheFast" style="width: 100px;">
            <h2 style="color: #d84315; font-weight: 800;">LancheFast</h2>
            <p style="color: #5d4037; font-weight: 500;">Cadastro de Clientes</p>
        </div>

        @if(session()->has('success'))
            <div class="alert alert-success alert-dismissible fade show" role="alert">
                {{ session('success') }}
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
        @endif

        <form wire:submit.prevent="store">
            <div class="mb-3">
                <input type="text" class="form-control rounded-pill p-3" id="nome" name="nome" placeholder="🍔 Nome completo" wire:model.defer="nome">
            </div>

            <div class="mb-3">
                <input type="text" class="form-control rounded-pill p-3" id="endereco" name="endereco" placeholder="📍 Endereço" wire:model.defer="endereco">
            </div>

            <div class="mb-3">
                <input type="text" class="form-control rounded-pill p-3" id="telefone" name="telefone" placeholder="📞 Telefone" wire:model.defer="telefone">
            </div>

            <div class="mb-3">
                <input type="text" class="form-control rounded-pill p-3" id="cpf" name="cpf" placeholder="🧾 CPF" wire:model.defer="cpf">
            </div>

            <div class="mb-3">
                <input type="email" class="form-control rounded-pill p-3" id="email" name="email" placeholder="📧 Email" wire:model.defer="email">
            </div>

            <div class="mb-4">
                <input type="password" class="form-control rounded-pill p-3" id="password" name="password" placeholder="🔒 Senha" wire:model.defer="password">
            </div>

            <div class="d-grid">
                <button type="submit" class="btn btn-warning rounded-pill fw-bold p-3" style="background-color: #ff7043; border: none; color: white; font-size: 18px;">
                    🍟 Cadastrar
                </button>
            </div>
        </form>
    </div>
</div>
