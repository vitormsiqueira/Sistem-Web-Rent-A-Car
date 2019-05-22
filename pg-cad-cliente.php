<!doctype html>
<html lang="pt-br">
<br>

<!-- O conteúdo estrutural da pagina é semelhante em todas as telas, as diferenças aqui estão na  parte escrita "TELA DE CADASTRO DE ALUGUEL" linha 195-->

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta http-equiv="Content-Language" content="en">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no, shrink-to-fit=no" />
    <meta name="msapplication-tap-highlight" content="no">
    <link href="./main.css" type="text/css" rel="stylesheet">
</head>

<body>
    <div class="app-container app-theme-white body-tabs-shadow fixed-sidebar fixed-header">
        <div class="app-header header-shadow">
            <div class="app-header__logo">
                <div class="logo-src"></div>
                <div class="header__pane ml-auto">
                    <div>
                        <button type="button" class="hamburger close-sidebar-btn hamburger--elastic" data-class="closed-sidebar">
                            <span class="hamburger-box">
                                <span class="hamburger-inner"></span>
                            </span>
                        </button>
                    </div>
                </div>
            </div>
            <div class="app-header__mobile-menu">
                <div>
                    <button type="button" class="hamburger hamburger--elastic mobile-toggle-nav">
                        <span class="hamburger-box">
                            <span class="hamburger-inner"></span>
                        </span>
                    </button>
                </div>
            </div>
            <div class="app-header__menu">
                <span>
                    <button type="button" class="btn-icon btn-icon-only btn btn-primary btn-sm mobile-toggle-header-nav">
                        <span class="btn-icon-wrapper">
                            <i class="fa fa-ellipsis-v fa-w-6"></i>
                        </span>
                    </button>
                </span>
            </div>
            <div class="app-header__content">
                <div class="app-header-left">
                    <div class="search-wrapper">
                        <div class="input-holder">
                            <input type="text" class="search-input" placeholder="Type to search">
                            <button class="search-icon"><span></span></button>
                        </div>
                        <button class="close"></button>
                    </div>
                </div>
            </div>
        </div>
        <div class="app-main">
            <div class="app-sidebar sidebar-shadow bg-happy-green">
                <div class="app-header__logo">
                    <div class="header__pane ml-auto">
                        <div>
                            <button type="button" class="hamburger close-sidebar-btn hamburger--elastic" data-class="closed-sidebar">
                                <span class="hamburger-box">
                                    <span class="hamburger-inner"></span>
                                </span>
                            </button>
                        </div>
                    </div>
                </div>
                <div class="app-header__mobile-menu">
                    <div>
                        <button type="button" class="hamburger hamburger--elastic mobile-toggle-nav">
                            <span class="hamburger-box">
                                <span class="hamburger-inner"></span>
                            </span>
                        </button>
                    </div>
                </div>
                <div class="app-header__menu">
                    <span>
                        <button type="button" class="btn-icon btn-icon-only btn btn-primary btn-sm mobile-toggle-header-nav">
                            <span class="btn-icon-wrapper btn-success">
                                <i class="fa fa-ellipsis-v fa-w-6"></i>
                            </span>
                        </button>
                    </span>
                </div>
                <div class="scrollbar-sidebar">
                    <div class="app-sidebar__inner">

                        <!----- MENU VERTICAL ------>
                        <ul class="vertical-nav-menu">
                            <li class="app-sidebar__heading">Dashboards</li>
                            <li>
                                <a href="pg-index.php" class="btn-shadow mm-active"> <!--o href não esta redirecionando para a pagina index.php-->
                                    <i class="metismenu-icon pe-7s-rocket">
                                    </i>Tela Inicial
                                </a>
                            </li>
                            <li class="app-sidebar__heading">GERENCIAMENTO</li>
                            <li>
                                <a href="#">
                                    <i class="metismenu-icon pe-7s-diskette"></i>
                                    Cadastrar
                                    <i class="metismenu-state-icon pe-7s-angle-down caret-left"></i>
                                </a>
                                <ul>
                                    <li>
                                        <a href="pg-cad-aluguel.php">
                                                <i class="metismenu-icon">
                                                </i>Aluguel
                                        </a>
                                    </li>
                                    <li>
                                        <a href="pg-cad-carro.php">
                                                <i class="metismenu-icon">
                                                </i>Carro
                                        </a>
                                    </li>
                                    <li>
                                        <a href="pg-cad-cliente.php">
                                                <i class="metismenu-icon">
                                                </i>Cliente
                                        </a>
                                    </li>
                                    <li>
                                        <a href="pg-cad-servico.php">
                                                <i class="metismenu-icon">
                                                </i>Serviços
                                        </a>
                                    </li>
                                    <li>
                                        <a href="pg-cad-funcionario.php">
                                                <i class="metismenu-icon">
                                                </i>Funcionário
                                        </a>
                                    </li>
                                </ul>
                            </li>
                            <li>
                                <a href="#">
                                    <i class="metismenu-icon pe-7s-unlock"></i>
                                    Alterar
                                    <i class="metismenu-state-icon pe-7s-angle-down caret-left"></i>
                                </a>
                                <ul>
                                    <li>
                                        <a href="pg-alt-aluguel.php">
                                                <i class="metismenu-icon">
                                                </i>Aluguel
                                        </a>
                                    </li>
                                    <li>
                                        <a href="pg-alt-carro.php">
                                            <i class="metismenu-icon">
                                            </i>Carro
                                        </a>
                                    </li>
                                    <li>
                                        <a href="pg-alt-cliente.php">
                                                <i class="metismenu-icon">
                                                </i>Cliente
                                        </a>
                                    </li>
                                    <li>
                                        <a href="pg-alt-servico.php">
                                                <i class="metismenu-icon">
                                                </i>Serviços
                                        </a>
                                    </li>
                                    <li>
                                        <a href="pg-alt-funcionario.php">
                                                <i class="metismenu-icon">
                                                </i>Funcionário
                                        </a>
                                    </li>
                                </ul>
                            </li>
                            <li>
                                <a href="#">
                                    <i class="metismenu-icon pe-7s-search"></i>
                                    Consultar
                                    <i class="metismenu-state-icon pe-7s-angle-down caret-left"></i>
                                </a>
                                    <ul>
                                        <li>
                                            <a href="pg-cons-aluguel.php">
                                                <i class="metismenu-icon pe-7s-display2"></i>
                                                Aluguel
                                            </a>
                                        </li>
                                        <li>
                                            <a href="pg-cons-cliente.php">
                                                <i class="metismenu-icon pe-7s-display2"></i>
                                                Cliente
                                            </a>
                                        </li>
                                        <li>
                                            <a href="pg-cons-carro.php">
                                                <i class="metismenu-icon pe-7s-display2"></i>
                                                Carro
                                            </a>
                                        </li>
                                    </ul>
                            </li>
                            <li class="app-sidebar__heading">Estatísticas</li>
                            <li>
                                <a href="estatisticas.php">
                                    <i class="metismenu-icon pe-7s-display2"></i>
                                    Mensal
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>



            <!-- TELA DE CADASTRO DE CLIENTE-->
            <div class="app-main__outer">
                <div class="app-main__inner">
                    <div class="tab-content">
                        <div class="main-card mb-3 card">
                            <div class="card-body">
                                <h4>CADASTRAR CLIENTE</h4>
                                <br>

                                <!-- FORMULÁRIO DE CADASTRO DE CLIENTES-->
                                <form class="needs-validation"  method="POST" action="processa.php"> <!-- O método POST é responsavel por enviar o formulário através da action processa.php-->
                                    <div class="form-row"> <!-- essa classe alinha todo o conteudo da div em uma unica linha -->
                                        <div class="col-md-8"> <!-- essa classe define o tamanho do input, no caso 8 -->
                                            <label for="validationTooltip01">Nome Completo</label>
                                            <input type="text" name="nome" class="form-control" placeholder="digite o nome completo" required> <!--recebe o nome do cliente atribuindo a variável name=nome utilizando-a no arquivo processa.php. E o required torna o campo obrigatorio-->
                                        </div> <!-- A name é responsável por guardar um nome que será utilizada como parametro para enviar ao bd posteriormente através do arquivo processa.php, nesse caso na linha 14 -->
                                        
                                        
                                        <!-- Os comando são análogos para os outros campos -->
                                        <div class="col-md-4 mb-3">
                                            <label for="validationTooltip02">CPF</label>
                                            <input type="text" name="cpf" class="form-control" placeholder="cpf" required>
                                        </div>
                                    </div>
                                    <div class="form-row">
                                        <div class="col-md-5 mb-3">
                                            <label for="validationTooltipUsername">Telefone</label>
                                            <input type="text" name="tel" class="form-control" placeholder="(xx)xxxx-xxxx" required>
                                        </div>

                                        <div class="col-md-4 mb-3">
                                            <label for="validationTooltipUsername">CNH</label>
                                            <input type="text" name="cnh" class="form-control" placeholder="cnh" required>
                                        </div>

                                        <div class="col-md-3 mb-3">
                                            <label for="validationTooltip05">CEP</label>
                                            <input type="text" name="cep" class="form-control" placeholder="cep">
                                        </div>
                                    </div>
                                    <div class="form-row"> <!-- Linha seguinte do formulário -->
                                        <div class="col-md-6 mb-3">
                                            <label for="validationTooltip03">Cidade</label>
                                            <input type="text" name="cid" class="form-control" placeholder="cidade" required>
                                        </div>

                                        <div class="col-md-3 mb-3">
                                            <label for="validationTooltip04">Estado</label>
                                            <input type="text" name="est" class="form-control" placeholder="estado" required>
                                        </div>

                                        <div class="col-md-3 mb-3">
                                            <label for="validationTooltip04">Numero</label>
                                            <input type="text" name="num" class="form-control" placeholder="numero da residência" required>
                                        </div>
                                    </div>
                                    <div class="form-row"> <!-- Linha seguinte do formulário -->
                                        <div class="col-md-5 mb-3">
                                            <label for="validationTooltip03">Rua</label>
                                            <input type="text" name="rua" class="form-control" placeholder="rua" required>
                                        </div>

                                        <div class="col-md-7 mb-3">
                                            <label for="validationTooltip04">Complemento</label>
                                            <input type="text" name="comp" class="form-control" placeholder="complemento">
                                        </div>
                                    </div>
                                    <br>
                                    <button class="btn btn-success col-md mb-3" type="submit">Enviar</button> <!-- O botão de cadastrar usa a classe btn e o type é o gatilho para envio -->
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    <script type="text/javascript" src="./assets/scripts/main.js"></script></body>
</body>