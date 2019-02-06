<?php
    session_start();
    
    // DESTROI TODAS SESSIONS SETADAS
    if (isset($_SESSION['idadmin']))  { unset($_SESSION['idadmin']);  }
    if (isset($_SESSION['ra']))       { unset($_SESSION['ra']);       }
    if (isset($_SESSION['senha']))    { unset($_SESSION['senha']);    }
    if (isset($_SESSION['email']))    { unset($_SESSION['email']);    }
    if (isset($_SESSION['nome']))     { unset($_SESSION['nome']);     }
    if (isset($_SESSION['nivel_id'])) { unset($_SESSION['nivel_id']); }

    // DESTROI TODA A SESSÃO
    session_destroy();
    // STARTA NOVAMENTE PARA APARECER A MENSAGEM
    session_start();

    $_SESSION['sucess'] = "Deslogado com sucesso :)";
    header("Location: index.php?pagina=0");
    exit;
?>