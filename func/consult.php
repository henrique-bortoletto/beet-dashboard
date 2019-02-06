<?php 
    require 'connection.php';
    $GLOBALS['conn'] = $conn;

    #  funções para administrador
    function listaAdms() {
        
        $lista = array();
        $sql = "SELECT idadmin, ra, senha, email, nome, created FROM administrador ORDER BY idadmin";
        $result = mysqli_query($GLOBALS['conn'], $sql);
        
        if ($result) {
            while ($row = mysqli_fetch_assoc($result)) {
                array_push($lista, $row);
            }
            return $lista;
        }
    }

    function editar($id) {
        
        $lista = array();
        $sql = "SELECT idadmin, ra, senha, email, nome, created, nivel_id FROM administrador WHERE idadmin='$id' LIMIT 1";
        $result = mysqli_query($GLOBALS['conn'], $sql);
        
        if ($result) {
            while ($row = mysqli_fetch_assoc($result)) {
                array_push($lista, $row);
            }
            return $lista;
        }
    }

    function visualizarPerfil($id) {
        
        $lista = array();
        $sql = "SELECT idadmin, ra, senha, email, nome, created, nivel_id FROM administrador WHERE idadmin='$id' LIMIT 1";
        $result = mysqli_query($GLOBALS['conn'], $sql);
        
        if ($result) {
            while ($row = mysqli_fetch_assoc($result)) {
                array_push($lista, $row);
            }
            return $lista;
        }
    }

    function deletarUsuario($id) {
        
        $deletar = false;
        $sql = "DELETE FROM administrador WHERE idadmin='$id'";
        $result = mysqli_query($GLOBALS['conn'], $sql);
        
        if ($result) {
            $deletar = true;
        }
        return $deletar;
    }
   
    # funções para usuarios
    function listaUsuarios() {
        
        $lista = array();
        $sql = "SELECT idcliente, nomeusuario, email, senha, criado, nome FROM cliente JOIN nivelacesso ON cliente.nivel_id = nivelacesso.idnivel ORDER BY idcliente";
        $result = mysqli_query($GLOBALS['conn'], $sql);
        
        if ($result) {
            while ($row = mysqli_fetch_assoc($result)) {
                array_push($lista, $row);
            }
            return $lista;
        }
    }
    
    function visualizarPedido($id) {
        
        $lista = array();
        $sql = "SELECT idpedido, titulo, descricao, t_aplic FROM cliente JOIN pedido ON cliente.id_pedido = pedido.idpedido WHERE idcliente='$id'";
        $result = mysqli_query($GLOBALS['conn'], $sql);
        
        if ($result) {
            while ($row = mysqli_fetch_assoc($result)) {
                array_push($lista, $row);
            }
            return $lista;
        }
    }
?>