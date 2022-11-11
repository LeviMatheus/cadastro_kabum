<?php
    switch ($_REQUEST["acao"]) {
        case 'salvar':
            $cliente_nome = $_POST["cliente_nome"];
            $cliente_datanasc = $_POST["cliente_datanasc"];
            $cliente_cpf = $_POST["cliente_cpf"];
            $cliente_rg = $_POST["cliente_rg"];
            $cliente_telefone = $_POST["cliente_telefone"];

            $sql = "INSERT INTO clientes (cliente_nome,cliente_datanasc,cliente_cpf,cliente_rg,cliente_telefone) VALUES ('{$cliente_nome}','{$cliente_datanasc}','{$cliente_cpf}','{$cliente_rg}','{$cliente_telefone}')";

            $res = $conexao->query($sql);

            if($res==true){
                print("<script>alert('Cadastrado com sucesso')</script>");
                print("<script>location.href='?page=listar'</script>");
            }else{
                print("<script>alert('Erro ao cadastrar')</script>");
            }
            break;
        case 'editar':
            # code...
            break;

        case 'excluir':
            # code...
            break;
        
        default:
            print("<script>alert('Erro 404: Ação não encontrada')</script>");
            print("<script>location.href='?page=listar'</script>");
            break;
    }
?>