<?php session_start(); ?>

<?php
    require '../func/connection.php';

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        
        $ra = filter_input(INPUT_POST, 'admin', FILTER_SANITIZE_STRING);
        $senha = filter_input(INPUT_POST, 'senha', FILTER_SANITIZE_STRING);

        if (empty($ra) && empty($senha)) {
            
            $_SESSION['error'] = "Os campos não foram preenchidos :(";
            header("Location: ../index.php"); 
            exit;
            
        } elseif (empty($senha)) {
            
            $_SESSION['error'] = "Senha não foi preenchido :(";
            header("Location: ../index.php");
            exit;
            
        } elseif (empty($ra)) {
            
            $_SESSION['error'] = "RA não foi preenchido :(";
            header("Location: ../index.php");
            exit;
            
        } else {   
            
            function validaRa($r) {
                $padrao = '/^[0-9]{9}$/';
                return preg_match($padrao, $r);
            }
            $result_ra = validaRa($ra);
            
            if (!$result_ra) {
                
                $_SESSION['error'] = "RA incorreto :(";
                header("Location: ../index.php");
                exit;
                
            } else {
                
                function criptoSenha($cripto_senha) {
                    return md5($cripto_senha);
                }
                $cripto_senha = criptoSenha($senha);

                $sql = "SELECT idadmin, ra, senha, email, nome, nivel_id FROM administrador WHERE ra='$ra' AND senha='$cripto_senha' AND nivel_id='1' LIMIT 1";
                $result = mysqli_query($conn, $sql);
                $res_admin = mysqli_num_rows($result);

                if ($res_admin) {
                    
                    while ($row = mysqli_fetch_assoc($result)) {
                        $_SESSION['idadmin'] = $row['idadmin'];
                        $_SESSION['ra'] = $row['ra'];
                        $_SESSION['senha'] = $row['senha'];
                        $_SESSION['email'] = $row['email'];
                        $_SESSION['nome'] = $row['nome'];
                        $_SESSION['nivel_id'] = $row['nivel_id'];
                    }
                    
                    $id = $_SESSION['idadmin'];
                    $_SESSION['sucess'] = "Administrador autenticado com sucesso :)";
                    header("Location: ../index.php?pagina=1&id=$id");
                    exit;
                    
                } else {
                    
                    $_SESSION['error'] = "Administrador não encontrado  :(";
                    header("Location: ../index.php");
                    exit;
                }
            }
        }
    }
?>