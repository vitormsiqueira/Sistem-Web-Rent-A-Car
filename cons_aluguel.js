$(document).ready(function(){
    $("input[name='cpf']").blur(function(){
        var $nome = $("input[name='nome']");
        var $id_cliente = $("input[name='id_cliente']");
        var cpf = $(this).val();

        $.getJSON('processa_aluguel.php', {cpf},
            function (retorno) {
                $nome.val(retorno.nome);
                $id_cliente.val(retorno.id_cliente);
            }
        );
    });
});
$(document).ready(function(){
    $("input[name='modelo']").blur(function(){
        var $marca = $("input[name='marca']");
        var $placa = $("input[name='placa']");
        var $diaria = $("input[name='diaria']");
        var $id_carro = $("input[name='id_carro']");
        var modelo = $(this).val();

        $.getJSON('processa_aluguel.php', {modelo},
            function (retorno) {
                $marca.val(retorno.marca);
                $placa.val(retorno.placa);
                $diaria.val(retorno.diaria);
                $id_carro.val(retorno.$id_carro);
            }
        );
    });
});


