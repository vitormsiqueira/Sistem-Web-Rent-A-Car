$(function(){

    $("#pesquisa1").keyup(function(){
            
        var pesquisa1 = $(this).val();
        
        //Verificar se há algo digitado
        if(pesquisa1 != ''){
            var dados = {
                palavra : pesquisa1
            }		
            $.post('search1.php', dados, function(retorna){
                //Mostra dentro da ul os resultados obtidos 
                $(".resultado").html(retorna);
            });
        }else{
            $(".resultado").html('');
        }		
    });
});
