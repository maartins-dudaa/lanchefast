<div>
    <form wire:submit.prevent="salvar">
        <div class="modal-dialog">
            <div class="modal-content" style="border-radius: 20px; background-color: #fff8e1; border: 3px solid #ff7043; font-family: 'Poppins', sans-serif;">
                <div class="modal-header" style="background-color: #ff7043; color: white; border-top-left-radius: 20px; border-top-right-radius: 20px;">
                    <h5 class="modal-title fw-bold">🍔 Editar Cliente</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close" style="filter: brightness(0) invert(1);"></button>
                </div>

                <div class="modal-body">
                    <div class="mb-3">
                        <label class="form-label fw-semibold text-dark">Nome</label>
                        <input type="text" class="form-control rounded-pill p-3" wire:model="nome" placeholder="🧍 Nome completo">
                    </div>

                    <div class="mb-3">
                        <label class="form-label fw-semibold text-dark">Telefone</label>
                        <input type="text" class="form-control rounded-pill p-3" wire:model="telefone" placeholder="📞 Telefone">
                    </div>

                    <div class="mb-3">
                        <label class="form-label fw-semibold text-dark">Endereço</label>
                        <input type="text" class="form-control rounded-pill p-3" wire:model="endereco" placeholder="📍 Endereço">
                    </div>
                </div>

                <div class="modal-footer d-flex justify-content-between">
                    <button type="button" class="btn btn-secondary rounded-pill px-4" data-bs-dismiss="modal" href="{{ route('clientes.index') }}"
                    >
                        ❌ Cancelar
                    </button>
                    <button type="button" class="btn btn-warning rounded-pill px-4 fw-bold" wire:click="salvar" style="background-color: #ff7043; border: none; color: white;">
                        ✅ Salvar
                    </button>
                </div>
            </div>
        </div>
    </form>
</div>
