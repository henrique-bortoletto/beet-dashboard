<?php include 'view/_a__dash_menu.php'; ?>

<div class="content">
    <div class="container-fluid">
        <?php
            if (isset($_SESSION['error'])) {
                echo "<div class=\"row\">
                        <div class=\"col-md-6\">
                            <div class=\"alert alert-danger text-center\">
                                <span><b>alerta - </b>".$_SESSION['error']."</span>
                            </div>
                        </div>
                      </div>"; 
                unset ($_SESSION['error']);
            }
        ?>
        <div class="row"> 
            <div class="col-md-6">
                <?php  
                    if (isset($_GET['id'])) {
                        $id = $_GET['id'];
                    } else {
                        $id = 0;
                    }
                ?>
                <form id="TypeValidation" class="form-horizontal" method="POST" action="verify/_dash_adm_redefinir_senha_val.php">
                    <div class="card">
                        <div class="card-header card-header-rose card-header-text">
                            <div class="card-text">
                                <h4 class="card-title">Redefinir Senha</h4>
                            </div>
                        </div>
                        <div class="card-body">
                            <div class="row">
                                <label class="col-sm-2 col-form-label" for="senha">Nova Senha</label>
                                <div class="col-sm-8">
                                    <div class="form-group">
                                        <input class="form-control" type="password" name="n_senha" id="senha" required="true" autocomplete="off"/>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <label class="col-sm-2 col-form-label" for="senha">Repetir Senha</label>
                                <div class="col-sm-8">
                                    <div class="form-group">
                                        <input class="form-control" type="password" name="r_senha" id="senha" required="true" autocomplete="off"/>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <input type="hidden" name="id" value="<?php echo $id; ?>">
                        <div class="card-footer ml-auto mr-auto">
                            <button type="submit" class="btn btn-warning">Gravar</button>
                            <a href="javascript:history.back();">
                                <button type="button" class="btn btn-info">Voltar</button>
                            </a>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>