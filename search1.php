<?php
    include_once("conexao.php"); //inclui uma conexão com o bd

    //recuperar o valor da palavra
    $result_pesq_model_car = $_POST['palavra'];
    $result_pesq_model_car = "SELECT * FROM public.tbl_carro WHERE modelo LIKE '%$result_pesq_model_car%' OR marca LIKE '%$result_pesq_model_car%' OR placa LIKE '%$result_pesq_model_car%'";

    $resultado_pesq_model_car = pg_query($conexao, $result_pesq_model_car);

    if (pg_num_rows($resultado_pesq_model_car) < 1) {
        echo "Não encontrado.\n";
    }else{
        echo "
                <div class=\"\">
                    <div class=\"\">
                        <div class=\"\"><h5 class=\"card-title\">CARROS CADASTRADOS</h5>
                             <div class=\"table-responsive\">
                                <table class=\"mb-0 table\">
                                    <thead>
                                        <tr>
                                            <th>ID</th>
                                            <th>Marca</th>
                                            <th>Modelo</th>
                                            <th>Placa</th>
                                            <th>Cor</th>
                                            <th>Ano</th>
                                            <th>Diária</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        
                                        "; while($rows = pg_fetch_assoc($resultado_pesq_model_car)){
                                            echo "
                                            <tr>
                                                <th scope=\"row\">".$rows['id_carro']."</th>
                                               
                                                <td>".$rows['marca']."</td>
                                                <td>".$rows['modelo']."</td>
                                                <td>".$rows['placa']."</td>
                                                <td>".$rows['cor']."</td>
                                                <td>".$rows['ano']."</td>
                                                <td>".$rows['diaria']."</td>
                                            </tr>
                                        ";}"
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
                                    
                ";
        
    }

?>