<?php include 'view/_a__dash_menu.php'; ?>

    <div class="content">
        <div class="container-fluid">
            <?php
                if (isset($_SESSION['error'])) {
                    echo "<div class=\"row\">
                            <div class=\"col-md-12\">
                                <div class=\"alert alert-danger text-center\">
                                    <span><b>alerta - </b>".$_SESSION['error']."</span>
                                </div>
                            </div>
                          </div>"; 
                    unset ($_SESSION['error']);
                }

                if (isset($_SESSION['sucess'])) {
                    echo "<div class=\"row\">
                            <div class=\"col-md-12\">
                                <div class=\"alert alert-success text-center\">
                                    <span><b>alerta - </b>".$_SESSION['sucess']."</span>
                                </div>
                            </div>
                          </div>"; 
                    unset ($_SESSION['sucess']);
                }

                if (isset($_SESSION['warning'])) {
                    echo "<div class=\"row\">
                            <div class=\"col-md-12\">
                                <div class=\"alert alert-warning text-center\">
                                    <span><b>alerta - </b>".$_SESSION['warning']."</span>
                                </div>
                            </div>
                          </div>"; 
                    unset ($_SESSION['warning']);
                }
            ?> 
            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header card-header-rose card-header-icon">
                            <div class="card-icon">
                                <i class="material-icons">assignment</i>
                            </div>
                            <h4 class="card-title">Administradores</h4>                        
                        </div>
                        <div class="card-body">
                            <?php
                                include 'func/consult.php';
                                $lista = listaAdms();
                            ?>
                            <div class="table-responsive">
                                <table class="table">
                                    <thead>
                                        <tr>
                                            <th class="text-center">#</th>
                                            <th>Nome</th>
                                            <th>Ra</th>
                                            <th>Senha Criptografada</th>
                                            <th>Email</th>
                                            <th>Criado</th>
                                            <th>Ações</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php foreach($lista as $list): ?>
                                        <tr>
                                            <td class="text-center"><?php echo $list['idadmin']; ?></td>
                                            <td><?php echo ucwords($list['nome']); ?></td>
                                            <td><?php echo $list['ra']; ?></td>
                                            <td><?php echo $list['senha']; ?></td>
                                            <td><?php echo $list['email']; ?></td>
                                            <td><?php echo $list['created']; ?></td>
                                            <td class="td-actions">
                                                <a href="index.php?pagina=6&id=<?php echo $list['idadmin']; ?>" title="Visualizar">
                                                    <button type="button" rel="tooltip" class="btn btn-info">
                                                        <i class="material-icons">person</i>
                                                    </button>
                                                </a>
                                                <a href="index.php?pagina=5&id=<?php echo $list['idadmin']; ?>" title="Editar">
                                                    <button type="button" rel="tooltip" class="btn btn-warning">
                                                        <i class="material-icons">edit</i>
                                                    </button>
                                                </a>
                                                <a href="index.php?pagina=7&id=<?php echo $list['idadmin']; ?>" title="Deletar">
                                                    <button type="button" rel="tooltip" class="btn btn-danger">
                                                        <i class="material-icons">close</i>
                                                    </button>
                                                </a>
                                            </td>
                                        </tr>
                                        <?php endforeach; ?>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>  
                </div>
            </div>
        </div>
    </div>