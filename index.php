<?php
    include 'view/_a__dash_header.php';

    $num = isset($_GET['pagina']) ? $_GET['pagina'] : 0;

    $pagina[0]  = 'view/_b__dash_login.php';
    $pagina[1]  = 'view/_b__dash_welcome.php';
    $pagina[2]  = 'view/_b__dash_exit.php';
    $pagina[3]  = 'view/_c__dash_adm_visualizar.php';
    $pagina[4]  = 'view/_c__dash_adm_cadastro_form.php';
    $pagina[5]  = 'view/_c__dash_adm_editar_form.php';
    $pagina[6]  = 'view/_c__dash_adm_visualizar_perfil.php';
    $pagina[7]  = 'view/_c__dash_adm_deletar_form.php';
    $pagina[8]  = 'view/_c__dash_adm_redefinir_senha_form.php';
    $pagina[9]  = 'view/_c__dash_adm_recuperar_senha.php';
    $pagina[10] = 'view/_d__dash_usuario_visualizar.php';
    $pagina[11] = 'view/_d__dash_usuario_visualizar_pedido.php';

    if (!empty($num+1)) {
        if (file_exists($pagina[$num])) {
            include $pagina[$num];
        } else  {
            include $pagina[0];
        }
    }

    include 'view/_a__dash_footer.php';