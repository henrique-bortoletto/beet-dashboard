<?php session_start(); ?>

<?php 
    $id = $_GET['id'];
    $del = $_GET['del'];

    if ($del == 1) {

        include '../func/consult.php';
        $delete = deletarUsuario($id);

        if ($delete) {
            $_SESSION['sucess'] = "Exclusão feita com sucesso :(";
            header("Location: ../index.php?pagina=3");
            exit;
        } else {
            $_SESSION['error'] = "Erro ao excluir :(";
            header("Location: ../index.php?pagina=3");
            exit;
        }
        
    } else {
        $_SESSION['warning'] = "Exclusão cancelada :(";
        header("Location: ../index.php?pagina=3");
        exit;
    }
?>