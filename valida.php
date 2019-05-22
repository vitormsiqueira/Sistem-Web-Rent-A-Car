<?php
    session_start(); // Recebe a sessão iniciada
    include_once("conexao.php"); // Inclui o arquivo conexão, criando assim a conexão com o bd
    if((isset($_POST['email'])) && (isset($_POST['senha']))){
        $usuario = pg_escape_string ($conexao, $_POST['email']); // A variável usuario recebe a conexão e o email. A função pg_escape_string faz escapar de caracteres especiais no postgresql
        $senha = pg_escape_string ($conexao, $_POST['senha']); //A variável senha recebe a conexão e a senha. A função pg_escape_string faz escapar de caracteres especiais no postgresql
        $senha = md5($senha); // MD5 converte a senha em criptografia

        $pg = "SELECT * FROM tbl_funcionario WHERE email = '$usuario' and senha = '$senha' LIMIT 1"; // Consulta em sql ao postgresql pelo usuario e senha
        $result = pg_query($conexao, $pg); //essa função recebe o resultado da conexão e da seleção de dados do bd
        $resultado = pg_fetch_assoc($result); //retorna um array associativo que corresponde à linha (registro) recuperado. Retorna FALSE, se não houver mais registros.
        
        // Responsavel por verificar se o usuário está logado e o seu nivel de acesso
        if(isset($resultado)){ 
			$_SESSION['usuarioNome'] = $resultado['nome'];
			$_SESSION['usuarioNiveisAcessoId'] = $resultado['niveis_acesso_id'];
            $_SESSION['usuarioEmail'] = $resultado['email'];
            $_SESSION['usuarioFuncao'] = $resultado['funcao'];

            // As condições abaixo redireciona para páginas correspondentes para cada nível de acesso do cadastro do funcionário (obs: só funciona para nivel 1 até o momento)
			if($_SESSION['usuarioNiveisAcessoId'] == "1"){
				header("Location: pg-index.php");
			}elseif($_SESSION['usuarioNiveisAcessoId'] == "2"){
				header("Location: index2.php");
			}elseif($_SESSION['usuarioNiveisAcessoId'] == "3"){
				header("Location: index3.php");
			}else{
                $_SESSION['loginErro'] = "Usuário ou senha Inválidos";
			    header("Location: login.php");
            }

		// Não foi encontrado um usuario na tabela usuário com os mesmos dados digitado no formulário
		}else{	
			// Váriavel global recebendo a mensagem de erro
			$_SESSION['loginErro'] = "Usuário ou senha Inválidos"; // (não esta funcionando ainda)
			header("Location: login.php"); //redireciona o usuario para a página de login
        }

    }else{
        $_SESSION['LoginErro'] = "Usuário ou senha inválidos";
        header("Location: login.php"); //redireciona o usuario para a página de login
    }
?>
