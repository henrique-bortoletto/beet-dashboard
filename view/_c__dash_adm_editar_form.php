<?php include("view/_a__dash_menu.php"); ?>

<div class="content">
    <div class="container-fluid">
        <div class="row"> 
            <div class="col-md-10">
                <form id="TypeValidation" class="form-horizontal" method="POST" action="verify/_dash_adm_editar_perfil_val.php">
                    <div class="card">
                        <div class="card-header card-header-rose card-header-text">
                            <div class="card-text">
                                <h4 class="card-title">Editar Perfil</h4>
                            </div>
                        </div>                
                        <?php
                            $id = $_GET['id'];
                            include 'func/consult.php';
                            $lista = editar($id);
                            foreach($lista as $list): 
                        ?>  
                        <input type="hidden" name="id" value="<?php echo $list['idadmin']; ?>">  
                        <div class="card-body">
                            <div class="row">
                                <label class="col-sm-2 col-form-label" for="nome">Nome</label>
                                <div class="col-sm-8">
                                    <div class="form-group">
                                        <input class="form-control" type="text" name="nome" id="nome" required="true" autocomplete="off" value="<?php echo $list['nome']; ?>"/>
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <label class="col-sm-2 col-form-label" for="email">Email</label>
                                <div class="col-sm-8">
                                    <div class="form-group">
                                        <input class="form-control" type="text" name="email" id="email" required="true" autocomplete="off" value="<?php echo $list['email']; ?>"/>
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <label class="col-sm-2 col-form-label" for="usuario">Ra</label>
                                <div class="col-sm-8">
                                    <div class="form-group">
                                        <input class="form-control" type="text" name="ra" id="usuario" required="true" maxlength="9" autocomplete="off" value="<?php echo $list['ra']; ?>"/>
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <label class="col-sm-2 col-form-label" for="senha">Senha</label>
                                <div class="col-sm-8">
                                    <div class="form-group">
                                        <input class="form-control" type="text" name="senha" id="senha" required="true" autocomplete="off" value="<?php echo $list['senha']; ?>" disabled/>
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <label class="col-sm-2 col-form-label" for="opcao">Acesso</label>
                                <div class="col-sm-8">
                                    <div class="form-group">
                                        <select  class="form-control" name="opcao" id="opcao" disabled>
                                            <option value="<?php echo $list['nivel_id']; ?>" selected>1</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <?php endforeach; ?>
                        
                        <div class="card-footer ml-auto mr-auto">
                            <button type="submit" class="btn btn-warning">Alterar</button>
                            <a href="javascript:history.back();">
                                <button type="button" class="btn btn-info">Voltar</button>
                            </a>
                        </div>
                    </div>
                </form>
            </div>
        </div>
        <div class="row">
            <div class="col-md-10">
                <div class="card">
                    <div class="card-body">
                        <h3>Segurança</h3>
                        <p>O dashboard usa criptografia para as senhas, no intuito de aumentar a segurança do sistema.<br/>
                        Caso precise redefinir senha clique no botão.</p>
                        <a href="index.php?pagina=8&id=<?php echo $id; ?>" title="Sim">
                            <button type="button" rel="tooltip" class="btn btn-success">REDEFINIR SENHA</button>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>