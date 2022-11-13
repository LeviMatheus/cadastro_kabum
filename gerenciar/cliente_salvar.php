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
            $cliente_nome = $_POST["cliente_nome"];
            $cliente_datanasc = $_POST["cliente_datanasc"];
            $cliente_cpf = $_POST["cliente_cpf"];
            $cliente_rg = $_POST["cliente_rg"];
            $cliente_telefone = $_POST["cliente_telefone"];
            $sql = "UPDATE clientes SET
                        cliente_nome='{$cliente_nome}',
                        cliente_datanasc='{$cliente_datanasc}',
                        cliente_cpf='{$cliente_cpf}',
                        cliente_rg='{$cliente_rg}',
                        cliente_telefone='{$cliente_telefone}'
                    WHERE
                        cliente_id=".$_REQUEST["cliente_id"];
            $res = $conexao->query($sql);

            if($res==true){
                print("<script>alert('Dados do cliente atualizados com sucesso')</script>");
                print("<script>location.href='?page=listar'</script>");
            }else{
                print("<script>alert('Erro ao atualizar dados do cliente')</script>");
            }
            break;

        case 'excluir':
            $sql = "DELETE FROM clientes WHERE cliente_id=".$_REQUEST["cliente_id"];
            $res = $conexao->query($sql);

            if($res==true){
                print("<script>alert('Dados do cliente excluídos com sucesso')</script>");
                print("<script>location.href='?page=listar'</script>");
            }else{
                print("<script>alert('Erro ao excluir dados do cliente')</script>");
            }
            break;
        
        default:
            print("<script>alert('Erro 404: Ação não encontrada')</script>");
            print("<script>location.href='?page=listar'</script>");
            break;
    }
?>