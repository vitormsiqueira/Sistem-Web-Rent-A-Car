<?php
    include_once("conexao.php"); //inclui uma conexão

        //criação de variáveis do formulário de cadastro de aluguel
        $id_cliente = filter_input(INPUT_POST, 'id_cliente', FILTER_SANITIZE_STRING);
        $id_carro = filter_input(INPUT_POST, 'id_carro', FILTER_SANITIZE_STRING);
        $data_inicial = filter_input(INPUT_POST, 'data_inicial', FILTER_SANITIZE_STRING);
        $data_final = filter_input(INPUT_POST, 'data_final', FILTER_SANITIZE_STRING);
        $valor_aluguel = filter_input(INPUT_POST, 'valor_aluguel', FILTER_SANITIZE_STRING);
        $cpf = filter_input(INPUT_POST, 'cpf', FILTER_SANITIZE_STRING);
        $nome = filter_input(INPUT_POST, 'nome', FILTER_SANITIZE_STRING);
        $cnh = filter_input(INPUT_POST, 'cnh', FILTER_SANITIZE_STRING);
        $modelo = filter_input(INPUT_POST, 'modelo', FILTER_SANITIZE_STRING);
        $marca = filter_input(INPUT_POST, 'marca', FILTER_SANITIZE_STRING);
        $placa = filter_input(INPUT_POST, 'placa', FILTER_SANITIZE_STRING);
        $diaria = filter_input(INPUT_POST, 'diaria', FILTER_SANITIZE_STRING);

        // QUERY PARA INSERIR NA TABELA ALUGA

            $result_aluguel = "INSERT INTO public.tbl_aluga(data_inicial, cod_carro, cod_cliente, data_final, valor_aluguel) VALUES ('$data_inicial', '$id_carro', '$id_cliente', '$data_final', '$valor_aluguel')";
            $resultado_aluguel = pg_query($conexao, $result_aluguel);

            $cmdtuples = pg_affected_rows($resultado_aluguel);

            if ($cmdtuples){
                header("Location: pg-index.php");
            } else{
                header("Location: pg-cad-aluguel.php");
            }
        
