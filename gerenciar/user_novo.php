<h2>Novo cliente</h2>

<form action="?page=salvar_novo_cliente" method="POST">
    <input type="hidden" nome="acao" value="cadastrar">
    <div class="mb-3">
        <label>Nome</label>
        <input type="text" name="user_nome" class="form-control">
    </div>
    <div class="mb-3">
        <label>E-mail</label>
        <input type="email" name="user_email" class="form-control">
    </div>
    <div class="mb-3">
        <label>Senha</label>
        <input type="password" name="user_senha" class="form-control">
    </div>
    <div class="mb-3">
        <button type="submit" class="btn btn-primary"></button>
    </div>
</form>