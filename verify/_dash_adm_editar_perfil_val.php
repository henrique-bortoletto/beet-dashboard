<?php session_start(); ?>

<?php
    require '../func/connection.php';

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        
        $id = filter_input(INPUT_POST, 'id', FILTER_SANITIZE_STRING);
        $nome = filter_input(INPUT_POST, 'nome', FILTER_SANITIZE_STRING);
        $email = filter_input(INPUT_POST, 'email', FILTER_SANITIZE_STRING);
        $ra = filter_input(INPUT_POST, 'ra', FILTER_SANITIZE_STRING);
        $nivel_acesso = 1;

        $sql = "UPDATE administrador SET ra='$ra', email='$email', nome='$nome', modified=NOW(), nivel_id='$nivel_acesso' WHERE idadmin='$id' LIMIT 1";
        $result = mysqli_query($conn, $sql);

        if ($result) {
            
            while ($row = mysqli_fetch_assoc($result)) {
                $_SESSION['idadmin'] = $row['idadmin'];
                $_SESSION['ra'] = $row['ra'];
                $_SESSION['senha'] = $row['senha'];
                $_SESSION['email'] = $row['email'];
                $_SESSION['nome'] = $row['nome'];
                $_SESSION['nivel_id'] = $row['nivel_id'];
            }
            
            $_SESSION['sucess'] = "Alteração feita com sucesso :)";
            header("Location: ../index.php?pagina=3");
            exit;
        } else {
            $_SESSION['error'] = "Erro ao efetuar alteração :)";
            header("Location: ../index.php?pagina=3");
            exit;
        }
    }
?>