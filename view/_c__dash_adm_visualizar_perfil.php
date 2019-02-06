<?php include 'view/_a__dash_menu.php'; ?>

<div class="content">
    <div class="row">
        <div class="col-md-5 offset-3">
            <div class="card card-profile center">
                <div class="card-avatar">
                    <a href="#">
                        <img class="img" src="public/img/user.png"/>
                    </a>
                </div>
                <?php
                    $id = $_GET['id'];
                    include 'func/consult.php';
                    $lista = visualizarPerfil($id);
                    foreach($lista as $list):
                ?>
                <div class="card-body">
                    <h6 class="card-category text-gray"><?php echo $list['nome']; ?></h6>
                    <h4 class="card-title text-left"><b># </b><?php echo $list['idadmin']; ?></h4>
                    <h4 class="card-title text-left"><b>Email: </b><?php echo $list['email']; ?></h4>
                    <h4 class="card-title text-left"><b>Ra: </b><?php echo $list['ra']; ?></h4>
                    <h4 class="card-title text-left"><b>Senha: </b><?php echo $list['senha']; ?></h4>
                    <a href="javascript:history.back();" title="Voltar">
                        <button type="button" rel="tooltip" class="btn btn-info">
                            <i class="material-icons">arrow_back</i>
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
                </div>
                <?php endforeach; ?>
            </div>
        </div>
    </div>
</div>