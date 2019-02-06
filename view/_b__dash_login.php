<?php session_start(); ?>

<div class="wrapper wrapper-full-page">
    <div class="page-header login-page header-filter" filter-color="black" style="background-image: url('public/img/login-1.jpg'); background-size: cover; background-position: top center;">
        <div class="container">
            <div class="col-lg-4 col-md-6 col-sm-6 ml-auto mr-auto">
                <form class="form" method="POST" action="verify/_dash_adm_login_val.php">
                    <div class="card card-login">    
                        <div class="card-header card-header-rose text-center py-3">
                            <img src="public/img/logo.svg" width="80" height="80" alt="logo"/>
                            <h4 class="mt-2">Central Administrativo</h4>
                        </div>
                        <div class="card-body">
                            <span class="bmd-form-group">
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text">
                                            <i class="material-icons">person</i>
                                        </span>
                                    </div>
                                    <input type="text" class="form-control" name="admin" placeholder="Ra" autocomplete="off"/>
                                </div>
                            </span>
                            <span class="bmd-form-group">
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text">
                                            <i class="material-icons">lock_outline</i>
                                        </span>
                                    </div>
                                    <input type="password" class="form-control" name="senha" placeholder="Senha"/>
                                </div>
                            </span>
                            <div>
                                <a href="index.php?pagina=9" class="btn btn-link btn-sm d-block">Perdeu a senha? Clique aqui</a>
                            </div>
                        </div>
                        <div class="card-footer justify-content-center">
                            <button type="submit" class="btn btn-rose btn-link btn-lg">Acessar</button>
                        </div>
                        <div class="card-footer justify-content-center">
                            <?php
                                if (isset($_SESSION['error'])) {
                                    echo "<div class=\"alert alert-danger text-center\">
                                            <span><b>alerta - </b>".$_SESSION['error']."</span>
                                         </div>";
                                    unset ($_SESSION['error']);
                                }

                                if (isset($_SESSION['sucess'])) {
                                    echo "<div class=\"alert alert-success text-center\">
                                            <span><b>alerta - </b>".$_SESSION['sucess']."</span>
                                          </div>";
                                    unset ($_SESSION['sucess']);
                                }
                            ?>
                        </div>
                    </div>
                </form>
            </div>
        </div>