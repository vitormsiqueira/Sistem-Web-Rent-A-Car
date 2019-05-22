$(function(){
    //Pesquisar os cursos sem refresh na página
	$("#pesquisa2").keyup(function(){
		
		var pesquisa2 = $(this).val();
		
		//Verificar se há algo digitado
		if(pesquisa2 != ''){
			var dados = {
				palavra : pesquisa2
			}		
			$.post('search2.php', dados, function(retorna){
				//Mostra dentro da ul os resultados obtidos 
				$(".resultado").html(retorna);
			});
		}else{
			$(".resultado").html('');
		}		
    });
});
