<div>
    <div class="container">
        <div class="card">
            <!-- Cabeçalho -->
            <div class="header">
                <div class="header-left">
                    <img src="https://img.icons8.com/emoji/48/hamburger-emoji.png" alt="hamburger" class="hamburger-icon">
                    <h2>Detalhes do Cliente</h2>
                </div>
                <a href="{{ route('clientes.index') }}" class="back-button">🍟</a>
            </div>

            <!-- Conteúdo -->
            <div class="content">
                <div class="form-field">
                    <label>👤 Nome</label>
                    <input type="text" value="{{ $cliente->nome }}" readonly />
                </div>

                <div class="form-field">
                    <label>🧾 CPF</label>
                    <input type="text" value="{{ $cliente->cpf }}" readonly />
                </div>

                <div class="form-field">
                    <label>📧 Email</label>
                    <input type="email" value="{{ $cliente->email }}" readonly />
                </div>

                <div class="form-field">
                    <label>📞 Telefone</label>
                    <input type="text" value="{{ $cliente->telefone }}" readonly />
                </div>

                <div class="form-field">
                    <label>🏠 Endereço</label>
                    <input type="text" value="{{ $cliente->endereco }}" readonly />
                </div>

                <div class="form-field; input-dissable">
                    <label>🔐 Senha</label>
                    <input type="text" value="{{ $cliente->password }}" readonly />
                </div>
            </div>

            <!-- Rodapé -->
            <div class="footer">
                <a href="{{ route('clientes.index') }}" class="back-button">⬅️ Voltar para Listagem</a>
            </div>
        </div>
    </div>
</div> <!-- Elemento raiz único -->
