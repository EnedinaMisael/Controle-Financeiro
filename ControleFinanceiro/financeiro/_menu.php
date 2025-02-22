<?php

    require_once './UtilDAO.php';
    UtilDAO::VerificarLogado();

    if(isset($_GET['close']) && $_GET['close'] == 1){
        UtilDAO::Deslogar();

    }


?>

<nav class="navbar-default navbar-side" role="navigation">
    <div class="sidebar-collapse">
        <ul class="nav" id="main-menu">
            <li class="text-center">
                <img src="assets/img/user1.png" class="user-image img-responsive" alt="Imagem do Usuário." title="Imagem do Usuário."/>
            </li>
            <li>
                <a href="meus_dados.php"><i class="fa fa-user fa-3x"></i>Meus Dados</a>
            </li>
            <li>
                <a href="#"><i class="fa fa-tasks fa-3x"></i>Categorias<span class="fa arrow"></span></a>
                <ul class="nav nav-second-level">
                    <li>
                        <a href="nova_categoria.php">Cadastrar Categoria</a>
                    </li>
                    <li>
                        <a href="consultar_categoria.php">Consultar Categoria</a>
                    </li>
                </ul>
            </li>
            <li>
                <a href="#"><i class="fa fa-building fa-3x"></i>Empresas<span class="fa arrow"></span></a>
                <ul class="nav nav-second-level">
                    <li>
                        <a href="nova_empresa.php">Cadastrar Empresa</a>
                    </li>
                    <li>
                        <a href="consultar_empresa.php">Consultar Empresa</a>
                    </li>
                </ul>
            </li>
            <li>
                <a href="#"><i class="fa fa-bank fa-3x"></i>Contas<span class="fa arrow"></span></a>
                <ul class="nav nav-second-level">
                    <li>
                        <a href="nova_conta.php">Cadastrar Conta</a>
                    </li>
                    <li>
                        <a href="consultar_conta.php">Consultar Conta</a>
                    </li>
                </ul>
            </li>
            <li>
                <a href="#"><i class="fa fa-credit-card fa-3x"></i>Movimentos<span class="fa arrow"></span></a>
                <ul class="nav nav-second-level">
                    <li>
                        <a href="realizar_movimento.php">Realizar Movimento</a>
                    </li>
                    <li>
                        <a href="consultar_movimento.php">Consultar Movimento</a>
                    </li>
                </ul>
            </li>
            <li>
                <a href="_menu.php?close=1" class="active-menu"><i class="fa fa-power-off fa-3x"></i>Sair</a>
            </li>
        </ul>
    </div>
</nav>