<?php
    switch ($_REQUEST["acao"]) {
        case 'cadastrar':
            $nome = $_POST["cliente_nome"];
            break;

        case 'editar':
            # code...
            break;

        case 'excluir':
            # code...
            break;
        
        default:
            # code...
            break;
    }
?>