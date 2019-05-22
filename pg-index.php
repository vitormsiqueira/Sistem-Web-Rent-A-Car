<?php
    session_start(); //recebe a sessão iniciada
   
?>

<!doctype html>
<html lang="pt-br">

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

            <!--*********** PÁGINA INTERNA QUE MUDA DE ACORDO COM OS CLICKS DO MENU LATERAL *******************-->
            <div class="app-main__outer">
                <div class="app-main__inner">
                    <div class="tab-content">
                        <div class="tab-pane active" id="tab-dsh-inicio-0" role="tabpanel">
                            <div class="card-body shadow ">
                                        <div class="col-md-6 col-xl-12">
                                            <div class="card mb-3 widget-content bg-premium-dark">
                                                <div class="widget-content-wrapper text-white">
                                                    <div class="widget-content-left">
                                                        <div class="widget-heading">Produtos Vendidos</div>
                                                        <div class="widget-subheading">Total de Aluguéis</div>
                                                    </div>
                                                    <div class="widget-content-right">
                                                        <div class="widget-numbers text-warning">
                                                        <span>
                                                            <?php
                                                                include_once("conexao.php");
                                                                $sql = pg_query("SELECT SUM(valor_aluguel) AS soma FROM public.tbl_aluga 
                                                                where exists (select 1 from public.tbl_carro where valor_aluguel>0)");
                                                                    while ($linha = pg_fetch_assoc($sql)){
                                                                    $total = $linha['soma'];
                                                                    }
                                                                    
                                                                    echo $total
                                                            ?>
                                                        </span></div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-6 col-xl-12">
                                            <div class="card mb-3 widget-content bg-midnight-bloom">
                                                <div class="widget-content-wrapper text-white">
                                                    <div class="widget-content-left">
                                                        <div class="widget-heading">Ticket Médio</div>
                                                        <div class="widget-subheading">Média de Compras por Cliente</div>
                                                    </div>
                                                    <div class="widget-content-right">
                                                        <div class="widget-numbers text-white">
                                                        <span>
                                                            <?php
                                                                include_once("conexao.php");
                                                                $sql = pg_query("SELECT AVG(valor_aluguel) AS media FROM tbl_aluga");
                                                                    while ($linha = pg_fetch_assoc($sql)){
                                                                    $total = $linha['media'];
                                                                    }
                                                                    
                                                                    echo $total
                                                            ?>
                                                        </span></div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-6 col-xl-12">
                                            <div class="card mb-3 widget-content bg-plum-plate">
                                                <div class="widget-content-wrapper text-white">
                                                    <div class="widget-content-left">
                                                        <div class="widget-heading">Total de Pedidos</div>
                                                        <div class="widget-subheading">Último Ano</div>
                                                    </div>
                                                    <div class="widget-content-right">
                                                        <div class="widget-numbers text-white">
                                                        <span>
                                                            <?php
                                                                include_once("conexao.php");
                                                                $sql = pg_query("SELECT COUNT(id_aluga) AS alugueis FROM tbl_aluga");
                                                                    while ($linha = pg_fetch_assoc($sql)){
                                                                    $total = $linha['alugueis'];
                                                                    }
                                                                    
                                                                    echo $total
                                                            ?>
                                                        </span></div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        
                                        <div class="col-md-6 col-xl-12">
                                            <div class="card mb-3 widget-content bg-arielle-smile">
                                                <div class="widget-content-wrapper text-white">
                                                    <div class="widget-content-left">
                                                        <div class="widget-heading">Clientes</div>
                                                        <div class="widget-subheading">Ativos</div>
                                                    </div>
                                                    <div class="widget-content-right">
                                                        <div class="widget-numbers text-white">
                                                        <span>
                                                            <?php
                                                                include_once("conexao.php");
                                                                $sql = pg_query("SELECT COUNT(id_cliente) AS clientes FROM tbl_cliente");
                                                                    while ($linha = pg_fetch_assoc($sql)){
                                                                    $total = $linha['clientes'];
                                                                    }
                                                                    echo $total
                                                            ?>
                                                        </span></div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-6 col-xl-12">
                                            <div class="card mb-3 widget-content bg-grow-early">
                                                <div class="widget-content-wrapper text-white">
                                                    <div class="widget-content-left">
                                                        <div class="widget-heading">Funcionários</div>
                                                        <div class="widget-subheading">Contratados</div>
                                                    </div>
                                                    <div class="widget-content-right">
                                                        <div class="widget-numbers text-white">
                                                        <span>
                                                            <?php
                                                                include_once("conexao.php");
                                                                $sql = pg_query("SELECT COUNT(id_func) AS funcionarios FROM tbl_funcionario");
                                                                    while ($linha = pg_fetch_assoc($sql)){
                                                                    $total = $linha['funcionarios'];
                                                                    }
                                                                    echo $total
                                                            ?>
                                                        </span></div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!--**********************************************************************************************************-->
        </div>  
    </div>
    <script type="text/javascript" src="./assets/scripts/main.js"></script>
</body>

</html>
