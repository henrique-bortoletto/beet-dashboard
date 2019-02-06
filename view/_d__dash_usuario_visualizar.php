<?php include 'view/_a__dash_menu.php'; ?>

<div class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
            <?php
                include 'func/consult.php';
                $lista = listaUsuarios();
            ?>
            <?php if (!empty($lista)): ?>
                <div class="card">
                   <div class="card-header card-header-warning card-header-icon">
                        <div class="card-icon">
                            <i class="material-icons">assignment</i>
                        </div>
                        <h4 class="card-title">Lista de Cadastros</h4>                        
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th class="text-center">#</th>
                                        <th>Nome</th>
                                        <th>Email</th>
                                        <th>Senha</th>
                                        <th>Tipo</th>
                                        <th>Criado</th>
                                        <th>Ações</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php foreach ($lista as $list): ?>
                                    <tr>
                                        <td class="text-center"><?php echo $list['idcliente']; ?></td>
                                        <td><?php echo ucwords($list['nomeusuario']); ?></td>
                                        <td><?php echo $list['email']; ?></td>
                                        <td><?php echo $list['senha']; ?></td>
                                        <td><?php echo $list['nome'] ?></td>
                                        <td><?php echo $list['criado']; ?></td>
                                        <td class="td-actions">
                                            <a href="#" title="Visualizar">
                                                <button type="button" rel="tooltip" class="btn btn-info">
                                                    <i class="material-icons">person</i>
                                                </button>
                                            </a>
                                            <a href="index.php?pagina=11&id=<?php echo $list['idcliente']; ?>" title="Pedido">
                                                <button type="button" rel="tooltip" class="btn btn-sucess">
                                                    <i class="material-icons">edit</i>
                                                </button>
                                            </a>
                                            <a href="#" title="Deletar">
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
            <?php else: ?>
                <div class="row">
                    <div class="col-md-12">
                        <div class="alert alert-warning text-center">
                            <span><b>alerta - </b>Não foi encontrado nenhum registro no banco :(</span>
                        </div>
                    </div>
                </div>
            <?php endif; ?>
            </div>
        </div>
    </div>
</div>
