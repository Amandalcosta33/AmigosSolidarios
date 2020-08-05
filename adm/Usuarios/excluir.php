<?php
    $id_usuario = $_GET['id'];
    
     require_once "../classes/Usuarios.php";
    
     $usuario = new Usuario();
    
     $usuario->id = $id_usuario;
     $usuario->excluir();
    
     echo "Usuario excluido com sucesso.";

?>