<?php 
    # unica parte do site quenão funciona, a senha é trocada no banco
    # porem o envio da senha para o admin não funciona.

    require '../func/connection.php';

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        
        $email = filter_input(INPUT_POST, 'email', FILTER_SANITIZE_STRING);

        $sql = "SELECT * FROM administrador WHERE email='$email' LIMIT 1";
        $result = mysqli_query($conn, $sql);

        if ($result) {
            
            while ($row = mysqli_fetch_assoc($result)) {
                
                $id = $row['idadmin'];
                $nome = $row['nome'];
                $email = $row['email'];
                
            }
            
            function geraSenha($tamanho = 8, $maiusculas = false, $numeros = false, $simbolos = false) {
                
                $letra_min = 'abcdefghijklmnopqrstuvwxyz';
                $letra_mai = 'ABCDEFGHIJKLMNOPQRSTUVWXYZ';
                $numeros = '1234567890';
                $simbolos = '!@#$%*-';
                $retorno = '';
                $caracteres = '';
                $caracteres .= $letra_min;
                
                if ($maiusculas) {
                    $caracteres .= $letra_mai;
                }
                if ($numeros) { 
                    $caracteres .= $numeros; 
                }
                if ($simbolos) { 
                    $caracteres .= $simbolos; 
                }
                
                $len = strlen($caracteres);
                for ($n = 1; $n <= $tamanho; $n++) {
                    $rand = mt_rand(1, $len);
                    $retorno .= $caracteres[$rand-1];
                }
                return $retorno;
            }
            
            $novasenha = geraSenha(15, true, true, true);
            $senha = md5($novasenha);

            $sql = "UPDATE administrador SET senha='$senha' WHERE idadmin='$id'";
            $result = mysqli_query($conn, $sql);

            $remetente = $email;
            $origem = "beetcontato@gmail.com";
            $subject = "Solicitação de nova senha";

            $mensagem = "Olá $nome. Sua solicitação para renovar sua senha.\r\n";
            $mensagem .= "Sua <strong>nova</strong>senha: <strong>$senha</strong>\r\n";
            $mensagem .= "Caso não tenha solicitado esta ação. Acesse a sua conta e altere sua senha novamente.\r\n";
            $mensagem .= "Equipe Beet! Obrigado.\r\n";

            $headers = "MIME-Version: 1.1\n";
            $headers .= "Content-type: text/plain; charset=iso-8859-1\n";
            $headers .= "From: " . $remetente . "\n";
            $headers .= "Reply-To: " . $origem . "\n";

            if (mail($remetente, $subject, $mensagem, $headers)) {
                echo "Mensagem enviada com sucesso";
            } else {
                echo "A mensagem não pode ser enviada";
            }
            
        } else {
            echo "Não Encontramos o email na base de dados";
        }   
    }
?>
