<?php


    
    $conectar = new PDO("pgsql:host=localhost;dbname=rentCar","postgres","vms374363");

    $sql_query1 = "INSERT INTO public.tbl_aluga(data_inicial, cod_carro, cod_cliente, data_final, valor_aluguel, cod_servicos) VALUES('2019-05-29', '8', '4', '2019-05-30', '85.9', '1')";
    
    $statment = $conectar->query($sql_query1);
