<?php
    include_once("conexao.php"); //inclui uma conexão com o bd

    //recuperar o valor da palavra
    $result_pesq_aluguel = $_POST['palavra'];
    $result_pesq_aluguel = "SELECT * FROM public.tbl_aluga WHERE id_aluga = '$result_pesq_aluguel'::int OR 
    cod_cliente = '$result_pesq_aluguel'::int OR cod_carro = '$result_pesq_aluguel'::int";

    $resultado_pesq_aluguel = pg_query($conexao, $result_pesq_aluguel);

    if (pg_num_rows($resultado_pesq_aluguel) < 1) {
        echo "Nada encontrado.\n";
    }else{
        echo "
                <div class=\"\">
                    <div class=\"\">
                        <div class=\"\"><h5 class=\"card-title\">ALUGUÉIS REGISTRADOS</h5>
                             <div class=\"table-responsive\">
                                <table class=\"mb-0 table\">
                                    <thead>
                                        <tr>
                                            <th>ID</th>
                                            <th>Data Inicial</th>
                                            <th>Data Final</th>
                                            <th>Codigo do Carro</th>
                                            <th>Codigo do Cliente</th>
                                            <th>Valor do Aluguel</th>
                                            <th>Codigo do Serviço</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        
                                        "; while($rows = pg_fetch_assoc($resultado_pesq_aluguel)){
                                            echo "
                                            <tr>
                                                <th scope=\"row\">".$rows['id_aluga']."</th>
                                                <td>".$rows['data_inicial']."</td>
                                                <td>".$rows['data_final']."</td>
                                                <td>".$rows['cod_carro']."</td>
                                                <td>".$rows['cod_cliente']."</td>
                                                <td>".$rows['valor_aluguel']."</td>
                                                <td>".$rows['cod_servicos']."</td>
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