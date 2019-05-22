<?php
    include_once("conexao.php"); //inclui uma conexão

    //criação de variáveis do formulário de cadastro de serviços
    $nomeS = filter_input(INPUT_POST, 'nomeS', FILTER_SANITIZE_STRING);
    $desc = filter_input(INPUT_POST, 'desc', FILTER_SANITIZE_STRING);
    $valor = filter_input(INPUT_POST, 'valor', FILTER_SANITIZE_STRING);

    // QUERY PARA INSERIR NA TABELA SERVIÇO
    $result_servicos = "INSERT INTO public.tbl_servicos(nome, descricao, valor) VALUES ('$nomeS', '$desc', '$valor')";
    $resultado_servicos = pg_query($conexao, $result_servicos);

    $cmdtuples = pg_affected_rows($resultado_servicos);

    if ($cmdtuples){
        header("Location: pg-index.php");
    } else{
        header("Location: pg-cad-servico.php");
    }