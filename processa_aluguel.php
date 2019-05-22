<?php

    //Credenciais de acesso ao BD
    define('HOST', 'localhost');
    define('USER', 'postgres');
    define('PASS', 'vms374363');
    define('DBNAME', 'rentCar');
    
    $conn = new PDO("pgsql:host=localhost;port=5432;dbname=rentCar;user=postgres;password=vms374363");

    
    $cpf = filter_input(INPUT_GET, 'cpf', FILTER_SANITIZE_STRING);
    if(!empty($cpf)){
        
        $limit = 1;
        $result_cliente = "SELECT * FROM public.tbl_cliente WHERE cpf =:cpf LIMIT :limit";
        
        $resultado_cliente = $conn->prepare($result_cliente);
        $resultado_cliente->bindParam(':cpf', $cpf, PDO::PARAM_STR);
        $resultado_cliente->bindParam(':limit', $limit, PDO::PARAM_INT);
        $resultado_cliente->execute();
        
        $array_valores = array();
        
        if($resultado_cliente->rowCount() != 0){
            $row_cliente = $resultado_cliente->fetch(PDO::FETCH_ASSOC);
            $array_valores['nome'] = $row_cliente['nome']; 
            $array_valores['cnh'] = $row_cliente['cnh'];
            $array_valores['id_cliente'] = $row_cliente['id_cliente']; 
        }else{
            $array_valores['nome'] = 'Aluno não encontrado';        
        }
        echo json_encode($array_valores);
    }


    $modelo = filter_input(INPUT_GET, 'modelo', FILTER_SANITIZE_STRING);
    if(!empty($modelo)){
        
        $limit = 1;
        $result_carro = "SELECT * FROM public.tbl_carro WHERE modelo =:modelo LIMIT :limit";
        
        $resultado_carro = $conn->prepare($result_carro);
        $resultado_carro->bindParam(':modelo', $modelo, PDO::PARAM_STR);
        $resultado_carro->bindParam(':limit', $limit, PDO::PARAM_INT);
        $resultado_carro->execute();
        
        $array_valores = array();
        
        if($resultado_carro->rowCount() != 0){
            $row_carro = $resultado_carro->fetch(PDO::FETCH_ASSOC);
            $array_valores['marca'] = $row_carro['marca']; 
            $array_valores['placa'] = $row_carro['placa'];
            $array_valores['id_carro'] = $row_carro['id_carro']; 
            $array_valores['diaria'] = $row_carro['diaria']; 
        }else{
            $array_valores['modelo'] = 'Carro não encontrado';        
        }
        echo json_encode($array_valores);
    }
