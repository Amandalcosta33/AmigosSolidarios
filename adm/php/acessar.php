<?php
    $usuario = $_POST['usuario'];
    $senha = $_POST['senha'];
    
     require_once "../classes/entrarrestrito.php";
     $acesso = new Login();
    
     $acesso->usuario = $usuario;
     $acesso->senha = $senha; 
     $acesso->Acessar();
?>