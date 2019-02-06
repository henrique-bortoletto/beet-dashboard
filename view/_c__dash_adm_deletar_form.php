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
                    <h6 class="card-category text-gray">Tem certeza que deseja excluir o Admin <?php echo $list['nome']; ?></h6>
                    <a href="verify/_dash_adm_deletar_perfil_val.php?id=<?php echo $list['idadmin']; ?>&del=1" title="Sim">
                        <button type="button" rel="tooltip" class="btn btn-warning">SIM</button>
                    </a>
                    <a href="verify/_dash_adm_deletar_perfil_val.php?id=<?php echo $list['idadmin']; ?>&del=2" title="Não">
                        <button type="button" rel="tooltip" class="btn btn-danger">NÃO</button>
                    </a>
                </div>
                <?php endforeach; ?>
            </div>
        </div>
    </div>
</div>