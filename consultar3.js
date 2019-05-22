$(function(){
    //Pesquisar os cursos sem refresh na página
	$("#pesquisa3").keyup(function(){
		
		var pesquisa3 = $(this).val();
		
		//Verificar se há algo digitado
		if(pesquisa3 != ''){
			var dados = {
				palavra : pesquisa3
			}		
			$.post('search3.php', dados, function(retorna){
				//Mostra dentro da ul os resultados obtidos 
				$(".resultado").html(retorna);
			});
		}else{
			$(".resultado").html('');
		}		
    });
});
