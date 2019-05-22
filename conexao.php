<?php
    $conn = "host=localhost port=5432 dbname=rentCar user=postgres password=vms374363"; //dados de acesso ao banco de dados
    $conexao = pg_connect($conn); //cria a conexão com o banco de dados
    
    if(!$conexao){ // verifica se conectou
        die ("Não foi possível conectar ao servidor PostgreSQL");
    }else{
        #echo "Conexão efetuada com sucesso!!";
    }
?>