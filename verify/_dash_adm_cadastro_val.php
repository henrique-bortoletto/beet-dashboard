<?php session_start(); ?>

<?php
    require '../func/connection.php';

    if ($_SERVER["REQUEST_METHOD"] == "POST") {

        $nome = filter_input(INPUT_POST, 'nome', FILTER_SANITIZE_STRING);
        $email = filter_input(INPUT_POST, 'email', FILTER_SANITIZE_STRING);
        $ra = filter_input(INPUT_POST, 'ra', FILTER_SANITIZE_STRING);
        $senha = filter_input(INPUT_POST, 'senha', FILTER_SANITIZE_STRING);

        function criptoSenha($senha) {
            return md5($cripto_senha);
        }
        
        $cripto_senha = criptoSenha($senha);

        $sql = "INSERT INTO administrador VALUES (DEFAULT, '$ra', '$cripto_senha', '$email', '$nome', NOW(), NULL, 1)";
        $result = mysqli_query($conn, $sql);
        $res_insert = mysqli_affected_rows($conn);

        if ($res_insert) {
            $_SESSION['sucess'] = "Cadastro realizado com sucesso :)";
            header("Location: ../index.php?pagina=3");
            exit;
        } else {
            $_SESSION['error'] = "Erro ao cadastrar :(";
            header("Location: ../index.php?pagina=3");
            exit;
        }
    }
?>
