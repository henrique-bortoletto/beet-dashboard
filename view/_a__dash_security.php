<?php
    # PARTE DE SEGURANÇA QUE DEVERÁ SER ARRUMADO.
    if (!isset($_SESSION['idadmin']) && 
        !isset($_SESSION['ra']) && 
        !isset($_SESSION['senha']) &&                       
        !isset($_SESSION['email']) && 
        !isset($_SESSION['nome']) && 
        !isset($_SESSION['nivel_id'])) {
    }
?>