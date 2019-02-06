<?php session_start(); ?>

<?php 
    require '../func/connection.php';

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        
        $id = filter_input(INPUT_POST, 'id', FILTER_SANITIZE_STRING);
        $n_senha = filter_input(INPUT_POST, 'n_senha', FILTER_SANITIZE_STRING);
        $r_senha = filter_input(INPUT_POST, 'r_senha', FILTER_SANITIZE_STRING);

        if ($n_senha != $r_senha) {
            
            $_SESSION['error'] = "Os campos não são iguais :(";
            header("Location: ../index.php?pagina=8");
            
        } else {
            
            function criptoSenha($cripto_senha){
                return md5($cripto_senha);
            }
            $cripto_senha = criptoSenha($n_senha);

            $sql = "UPDATE administrador SET senha='$cripto_senha' WHERE idadmin='$id'";
            $result = mysqli_query($conn, $sql);

            if ($result) {
                
                $_SESSION['sucess'] = "Senha atualizada com sucesso :)";
                header("Location: ../index.php?pagina=3");
                exit;
                
            } else {
                
                $_SESSION['error'] = "Erro ao redefinir senha :(";
                header("Location: ../index.php?pagina=3");
                exit;
            }
        }
    }
?>