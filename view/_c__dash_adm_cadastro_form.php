<?php include 'view/_a__dash_menu.php'; ?>

<div class="content">
    <div class="container-fluid">
        <div class="row"> 
            <div class="col-md-10">
                <form id="TypeValidation" class="form-horizontal" method="POST" action="verify/_dash_adm_cadastro_val.php">
                    <div class="card">
                        <div class="card-header card-header-rose card-header-text">
                            <div class="card-text">
                                <h4 class="card-title">Cadastro</h4>
                            </div>
                        </div>
                        
                        <div class="card-body">
                            <div class="row">
                                <label class="col-sm-2 col-form-label" for="nome">Nome</label>
                                <div class="col-sm-8">
                                    <div class="form-group">
                                        <input class="form-control" type="text" name="nome" id="nome" required="true" autocomplete="off"/>
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <label class="col-sm-2 col-form-label" for="email">Email</label>
                                <div class="col-sm-8">
                                    <div class="form-group">
                                        <input class="form-control" type="text" name="email" id="email" required="true" autocomplete="off"/>
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <label class="col-sm-2 col-form-label" for="usuario">Ra</label>
                                <div class="col-sm-8">
                                    <div class="form-group">
                                        <input class="form-control" type="text" name="ra" id="usuario" required="true" maxlength="9" autocomplete="off"/>
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <label class="col-sm-2 col-form-label" for="senha">Senha</label>
                                <div class="col-sm-8">
                                    <div class="form-group">
                                        <input class="form-control" type="password" name="senha" id="senha" required="true" autocomplete="off"/>
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <label class="col-sm-2 col-form-label" for="opcao">Acesso</label>
                                <div class="col-sm-8">
                                    <div class="form-group">
                                        <select  class="form-control" name="opcao" id="opcao" disabled>
                                            <option value="1" selected>1</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="card-footer ml-auto mr-auto">
                            <button type="submit" class="btn btn-success">Cadastrar</button>
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