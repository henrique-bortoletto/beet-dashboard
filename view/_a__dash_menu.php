<?php session_start(); ?>

<div class="wrapper">
    <div class="sidebar" data-color="rose" data-background-color="black" data-image="public/img/sidebar-1.jpg">
        <div class="logo">
            <a href="index.php?pagina=1" class="simple-text text-center logo-normal">dashboard</a>
        </div>
        <div class="sidebar-wrapper">
            <div class="user">
                <div class="photo">
                    <img src="public/img/user.png"/>
                </div>
                <div class="user-info">
                    <a data-toggle="collapse" href="#collapseExample" class="username">
                        <span><?php echo ucwords($_SESSION['nome']); ?></span>
                    </a>
                </div>
            </div>

            <ul class="nav">
                <li class="nav-item active">
                    <a class="nav-link" href="index.php?pagina=1">
                        <i class="material-icons">home</i>
                        <p>Home</p>
                    </a>
                </li>
                <li class="nav-item ">
                    <a class="nav-link" data-toggle="collapse" href="#pagesExamples">
                        <i class="material-icons">apps</i>
                        <p>Administradores
                            <b class="caret"></b>
                        </p>
                    </a>
                    <div class="collapse" id="pagesExamples">
                        <ul class="nav">
                            <li class="nav-item ">
                                <a class="nav-link" href="index.php?pagina=3">
                                    <span class="sidebar-mini">L</span>
                                    <span class="sidebar-normal">Listar Admin</span>
                                </a>
                            </li>
                            <li class="nav-item ">
                                <a class="nav-link" href="index.php?pagina=4">
                                    <span class="sidebar-mini">C</span>
                                    <span class="sidebar-normal">Cadastrar Admin</span>
                                </a>
                            </li>
                        </ul>
                    </div>
                </li>
                <li class="nav-item ">
                    <a class="nav-link" data-toggle="collapse" href="#pagesUser">
                        <i class="material-icons">person_add</i>
                        <p>Site Beet
                            <b class="caret"></b>
                        </p>
                    </a>
                    <div class="collapse" id="pagesUser">
                        <ul class="nav">
                            <li class="nav-item ">
                                <a class="nav-link" href="index.php?pagina=10">
                                    <span class="sidebar-mini">L</span>
                                    <span class="sidebar-normal">Listar Cadastros</span>
                                </a>
                            </li>
                        </ul>
                    </div>
                </li>
            </ul>
        </div>
        <div class="sidebar-background" style="background-image: url('public/img/sidebar-1.jpg')"></div>
    </div>
    <div class="main-panel">
        <nav class="navbar navbar-expand-lg navbar-transparent navbar-absolute fixed-top" id="navigation-example">
            <div class="container-fluid">
                <div class="collapse navbar-collapse justify-content-end">
                    <ul class="navbar-nav">
                        <li class="nav-item dropdown">
                            <a class="nav-link" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="material-icons">person</i>
                                <span class="notification">2</span>
                            </a>
                            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdownMenuLink">
                                <a class="dropdown-item" href="index.php?pagina=2">Sair</a>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
