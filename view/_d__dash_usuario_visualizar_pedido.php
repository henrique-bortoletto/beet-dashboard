<?php include 'view/_a__dash_menu.php'; ?>

<div class="content">
    <div class="row">
        <div class="col-md-5 offset-3">
            <div class="card card-profile center">
                <?php
                    $id = $_GET['id'];
                    include 'func/consult.php';
                    $lista = visualizarPedido($id);
                ?>
                <?php if (empty($lista)): ?>
                    <div class="card-body">
                        <h2>Visualizar Pedido</h2><br/>
                        <div class="row">
                            <div class="col-md-12">
                                <div class="alert alert-warning text-center">
                                    <span><b>alerta - </b>Não foi feito nenhum pedido :(</span>
                                </div>
                            </div>
                          </div><br/>
                        <a href="javascript:history.back();" title="Voltar">
                        <button type="button" rel="tooltip" class="btn btn-info">
                        <i class="material-icons">arrow_back</i>
                        </button>
                        </a>
                    </div>
                <?php else: ?>
                    <?php foreach($lista as $list): ?>
                    <div class="card-body">
                        <h2>Visualizar Pedido</h2>
                        <h4 class="card-title text-left"><b>Id Pedido: </b><?php echo $list['idpedido']; ?></h4><br/>
                        <h4 class="card-title text-left"><b>Titulo Pedido: </b><?php echo $list['titulo']; ?></h4><br/>
                        <h4 class="card-title text-left"><b>Descrição Pedido: </b><?php echo $list['descricao']; ?></h4><br/>
                        <h4 class="card-title text-left"><b>Sistemas Selecionados: </b><?php echo $list['t_aplic']; ?></h4><br/>
                        <a href="javascript:history.back();" title="Voltar">
                            <button type="button" rel="tooltip" class="btn btn-info">
                                <i class="material-icons">arrow_back</i>
                            </button>
                        </a>
                    </div>
                    <?php endforeach; ?>
                <?php endif; ?>
            </div>
        </div>
    </div>
</div>
