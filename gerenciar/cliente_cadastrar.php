<h2>Novo cliente</h2>

<form action="?page=salvar" method="POST">
    <input type="hidden" name="acao" value="salvar">
    <div class="mb-3">
        <label>Nome</label>
        <input type="text" name="cliente_nome" class="form-control" required>
    </div>
    <div class="mb-3">
        <label>Data de Nascimento</label>
        <input type="date" name="cliente_datanasc" class="form-control" required>
    </div>
    <div class="mb-3">
        <div id="infoHelp" class="form-text" required>Suas informações não são compartilhadas com ninguém.</div>
    </div>
    <div class="mb-3">
        <label>CPF</label>
        <input type="text" name="cliente_cpf" class="form-control" placeholder="123.123.123-12" required>
    </div>
    <div class="mb-3">
        <label>RG</label>
        <input type="text" name="cliente_rg" class="form-control" required>
    </div>
    <div class="mb-3">
        <label>Telefone</label>
        <input type="text" name="cliente_telefone" class="form-control" placeholder="(45) 99817-5314" required>
    </div>
    <div class="mb-3">
        <button type="submit" class="btn btn-primary">Enviar</button>
    </div>
</form>