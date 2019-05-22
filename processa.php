<?php
    include_once("conexao.php"); //inclui uma conexão

    //Telas da aba Cadastrar
        //criação de variáveis da formulário de cadastro de carros
        $modelo = filter_input(INPUT_POST, 'modelo', FILTER_SANITIZE_STRING); //cria uma variável PHP local "modelo" e atribui o name=modelo presente no arquivo pg-cad-carro que o campo pegou do usuário
        $marca = filter_input(INPUT_POST, 'marca', FILTER_SANITIZE_STRING);
        $ano = filter_input(INPUT_POST, 'ano', FILTER_SANITIZE_STRING);
        $placa = filter_input(INPUT_POST, 'placa', FILTER_SANITIZE_STRING);
        $diaria = filter_input(INPUT_POST, 'diaria', FILTER_SANITIZE_STRING);
        $cor = filter_input(INPUT_POST, 'cor', FILTER_SANITIZE_STRING);

        //criação de variáveis da formulário de cadastro de clientes
        $nome = filter_input(INPUT_POST, 'nome', FILTER_SANITIZE_STRING); //cria uma variável local "nome" e atribui o name=nome presente no arquivo pg-cad-cliente que o campo pegou do usuário
        $cpf = filter_input(INPUT_POST, 'cpf', FILTER_SANITIZE_STRING);
        $tel = filter_input(INPUT_POST, 'tel', FILTER_SANITIZE_STRING);
        $cnh = filter_input(INPUT_POST, 'cnh', FILTER_SANITIZE_STRING);
        $cep = filter_input(INPUT_POST, 'cep', FILTER_SANITIZE_STRING);
        $cid = filter_input(INPUT_POST, 'cid', FILTER_SANITIZE_STRING);
        $est = filter_input(INPUT_POST, 'est', FILTER_SANITIZE_STRING);
        $num = filter_input(INPUT_POST, 'num', FILTER_SANITIZE_STRING);
        $rua = filter_input(INPUT_POST, 'rua', FILTER_SANITIZE_STRING);
        $comp = filter_input(INPUT_POST, 'comp', FILTER_SANITIZE_STRING);

        //criação de variáveis do formulário de cadastro de funcionários
        $nomeF = filter_input(INPUT_POST, 'nomeF', FILTER_SANITIZE_STRING);
        $fun = filter_input(INPUT_POST, 'fun', FILTER_SANITIZE_STRING);
        $email = filter_input(INPUT_POST, 'email', FILTER_SANITIZE_STRING);
        $pass = filter_input(INPUT_POST, 'pass', FILTER_SANITIZE_STRING);
        $nivel = filter_input(INPUT_POST, 'nivel', FILTER_SANITIZE_STRING);

        

        //criação de variáveis do formulário de cadastro de serviços
        $nomeS = filter_input(INPUT_POST, 'nomeS', FILTER_SANITIZE_STRING);
        $desc = filter_input(INPUT_POST, 'desc', FILTER_SANITIZE_STRING);
        $valor = filter_input(INPUT_POST, 'valor', FILTER_SANITIZE_STRING);


        // QUERY PARA INSERIR NA TABELA CARRO
        if(!empty($modelo and $ano)){
            //Cria a variavel resut_carro que recebe o resultado da inserção de dados no bd. 
            //Na inserção as variáveis PHP declaradas anteriormente que recebe os dados 
            //correspondentes do formulário e os insere no bd.
            $result_carro = "INSERT INTO public.tbl_carro (placa, cor, modelo, ano, diaria, marca) 
            VALUES ('$placa', '$cor', '$modelo', '$ano', '$diaria', '$marca')";
            $resultado_carro = pg_query($conexao, $result_carro); //envia a conexão e a variável 
            //result_carro para a função pg_query, que tem por função realizar a query no bd

            $cmdtuples = pg_affected_rows($resultado_carro); //cria uma variável que guardará se o 
            //bd foi alterado (se a inserção de dados obteve sucesso)
            
            //Se os dados foram armazenados no bd o usuário é redirecionado para a página inicial 
            //(index.php), senão ele continua na mesma página 
            if ($cmdtuples){
                header("Location: pg-index.php"); //Redireciona para a página index.php
            } else{
                header("Location: pg-cad-carro.php"); // Redireciona para a página pg-cad-carro.php
            }
        }
        
        // QUERY PARA INSERIR NA TABELA CLIENTE
        if(!empty($nome and $cpf and $cnh and $tel)){
            //Cria a variavel resut_cliente que recebe o resultado da inserção de dados no bd. Na inserção as variáveis PHP (linha 14 a 23) declaradas anteriormente que recebe os dados correspondentes do formulário e os insere no bd.
            $result_client = "INSERT INTO public.tbl_cliente( nome, cnh, telefone, cidade, estado, rua, numero, complemento, cpf, cep) VALUES ('$nome', '$cnh', '$tel', '$cid', '$est', '$rua', '$num', '$comp', '$cpf', '$cep')";
            $resultado_client = pg_query($conexao, $result_client);
            
            $cmdtuples2 = pg_affected_rows($resultado_client);
            
            if ($cmdtuples2){
                header("Location: pg-index.php");
            } else{
                header("Location: pg-cad-cliente.php");
            }
        }

        // QUERY PARA INSERIR NA TABELA FUNCIONÁRIO
        if(!empty($nomeF and $pass)){
            $result_func = "INSERT INTO public.tbl_funcionario(email, senha, funcao, niveis_acesso_id, nome) VALUES ('$email', '$pass', '$fun', '$nivel', '$nomeF')";
            $resultado_func = pg_query($conexao, $result_func);

            $cmdtuples3 = pg_affected_rows($resultado_func);

            if ($cmdtuples3){
                header("Location: pg-index.php");
            } else{
                header("Location: pg-cad-funcionario.php");
            }
        }


        //criação de variáveis do formulário de cadastro de aluguel
        $id_cliente = filter_input(INPUT_POST, 'id_cliente', FILTER_SANITIZE_STRING);
        $id_carro = filter_input(INPUT_POST, 'id_carro', FILTER_SANITIZE_STRING);
        $data_inicial = filter_input(INPUT_POST, 'data_inicial', FILTER_SANITIZE_STRING);
        $data_final = filter_input(INPUT_POST, 'data_final', FILTER_SANITIZE_STRING);
        $valor_aluguel = filter_input(INPUT_POST, 'valor_aluguel', FILTER_SANITIZE_STRING);


        // QUERY PARA INSERIR NA TABELA ALUGA
        if(!empty($id_carro and $valor_aluguel)){
            $result_aluguel = "INSERT INTO public.tbl_aluga(data_inicial, cod_carro, cod_cliente, data_final, valor_aluguel) VALUES ('$data_inicial', '$id_carro', '$id_cliente', '$data_final', '$valor_aluguel')";
            $resultado_aluguel = pg_query($conexao, $result_aluguel);

            $cmdtuples5 = pg_affected_rows($resultado_aluguel);

            if ($cmdtuples5){
                header("Location: pg-index.php");
            } else{
                header("Location: pg-cad-aluguel.php");
            }
        }

        // QUERY PARA INSERIR NA TABELA SERVIÇOS
        if(!empty($nomeS and $valor)){
            $result_servicos = "INSERT INTO public.tbl_servicos(nome, descricao, valor) VALUES ('$nomeS', '$desc', '$valor')";
            $resultado_servicos = pg_query($conexao, $result_servicos);

            $cmdtuples4 = pg_affected_rows($resultado_servicos);

            if ($cmdtuples4){
                header("Location: pg-index.php");
            } else{
                header("Location: pg-cad-servico.php");
            }
        }

    //Telas da aba Alterar

        //criação de variáveis do formulário de alterar funcionários
            //falta fazer

        //criação de variáveis do formulário de alterar aluguel
            //falta fazer
        
        //criação de variáveis do formulário de alterar clientes
            //falta fazer

        //criação de variáveis do formulário de alterar carro
            //falta fazer