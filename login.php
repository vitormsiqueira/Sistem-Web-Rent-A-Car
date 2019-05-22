<?php
    session_start();
?>

<!doctype html>
<html lang="pt-br">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS"
        crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="css/global.css">
</head>
<h1 class="display-4 center">RENT A CAR</h1>
<h2 class="m2">Faça login para entrar no sistema</h2>

<body class="bg">
    <section class="container-fluid">
        <section class="row justify-content-center">
            <section class="col-12 col-sm-6 col-md-3">
                <form class="form-container" method="POST" action="valida.php">

                    <!-- Formulário de email -->
                    <div class="form-group"> 
                        <label for="exampleInputEmail1">Email address</label>
                        <input type="email" name="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email"> <!--campo que recebe o email--> 
                        <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
                    </div>

                    <!-- Formulário de senha -->
                    <div class="form-group">
                        <label for="exampleInputPassword1">Password</label>
                        <input type="password" name="senha" class="form-control" id="exampleInputPassword1" placeholder="Password">
                    </div>
                    <div class="form-group form-check">
                        <input type="checkbox" class="form-check-input" id="exampleCheck1">
                        <label class="form-check-label" for="exampleCheck1">Lembrar meu acesso.</label>
                    </div>
                    <button type="submit" class="btn btn-primary btn-block">Entrar</button> <!--Botão de entrar-->
                </form>
                <p class="text-center text-danger">
                    <!--Ao clicar em entrar, o bloco abaixo (em php) verifica se o email e senha cadastrados estao corretos-->
                    <?php 
                        if((isset($_POST['email'])) && (isset($_POST['senha']))){
                            echo $_SESSION['LoginErro'];
                            unset($_SESSION['LoginErro']);
                        }    
                    ?>
                </p>

            </section>
        </section>
    </section>
    
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
        crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js" integrity="sha384-wHAiFfRlMFy6i5SRaxvfOCifBUQy1xHdJ/yoi7FRNXMRBu5WHdZYu1hA6ZOblgut"
        crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js" integrity="sha384-B0UglyR+jN6CkvvICOB2joaf5I4l3gm9GU6Hc1og6Ls7i6U/mkkaduKaBhlAXv9k"
        crossorigin="anonymous"></script>
</body>

</html>