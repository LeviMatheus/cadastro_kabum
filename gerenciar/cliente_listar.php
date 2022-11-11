<h2>Listar clientes</h2>

<?php
    $sql = "SELECT * FROM clientes";
    $res = $conexao->query($sql);
    $qtd_clientes = $res->num_rows;

    if($qtd_clientes > 0){
        print("<table class='table table-hover table-striped table-bordered'>");
        print("<tr>");
        print "<th>#ID</th>";
        print "<th>Nome</th>";
        print "<th>Data Nascimento</th>";
        print "<th>CPF</th>";
        print "<th>RG</th>";
        print "<th>Telefone</th>";
        print "<th>Ações</th>";
        print("</tr>");
        while($row = $res->fetch_object()){
            print("<tr>");
            print "<td>".$row->cliente_id."</td>";
            print "<td>".$row->cliente_nome."</td>";
            print "<td>".$row->cliente_datanasc."</td>";
            print "<td>".$row->cliente_cpf."</td>";
            print "<td>".$row->cliente_rg."</td>";
            print "<td>".$row->cliente_telefone."</td>";
            print "<td>
                    <button class='btn btn-success'>Editar</button>
                    <button class='btn btn-danger'>Excluir</button>
                    </td>";
            print("</tr>");
        }
        print("</table>");
    }else{
        print("<p class='alert alert-danger'>Sem clientes cadastrados</p>");
    }
?>