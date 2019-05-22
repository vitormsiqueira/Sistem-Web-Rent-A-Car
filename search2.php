<?php
    include_once("conexao.php"); //inclui uma conexão com o bd

    //recuperar o valor da palavra
    $result_pesq_cliente = $_POST['palavra'];
    $result_pesq_cliente = "SELECT * FROM public.tbl_cliente WHERE nome LIKE '%$result_pesq_cliente%' OR cpf LIKE '%$result_pesq_cliente%' OR cnh LIKE '%$result_pesq_cliente'";

    $resultado_pesq_cliente = pg_query($conexao, $result_pesq_cliente);
    if (pg_num_rows($resultado_pesq_cliente) < 1) {
        echo "Não encontrado.\n";
    }else{
        echo "
                <div class=\"\">
                    <div class=\"\">
                        <div class=\"\"><h5 class=\"card-title\">CLIENTES CADASTRADOS</h5>
                             <div class=\"table-responsive\">
                                <table class=\"mb-0 table\">
                                    <thead>
                                        <tr>
                                            <th>ID</th>
                                            <th>Nome</th>
                                            <th>CNH</th>
                                            <th>CPF</th>
                                            <th>Telefone</th>
                                            <th>CEP</th>
                                            <th>Cidade</th>
                                            <th>Estado</th>
                                            <th>Rua</th>
                                            <th>Numero</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        
                                        "; while($rows = pg_fetch_assoc($resultado_pesq_cliente)){
                                            echo "
                                            <tr>
                                                <th scope=\"row\">".$rows['id_cliente']."</th>
                                                <td>".$rows['nome']."</td>
                                                <td>".$rows['cnh']."</td>
                                                <td>".$rows['cpf']."</td>
                                                <td>".$rows['telefone']."</td>
                                                <td>".$rows['cep']."</td>
                                                <td>".$rows['cidade']."</td>
                                                <td>".$rows['estado']."</td>
                                                <td>".$rows['rua']."</td>
                                                <td>".$rows['numero']."</td>
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