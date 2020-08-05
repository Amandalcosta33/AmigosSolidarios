<?php
    $email = $_POST['email'];
    $senha = $_POST['senha'];
    
     require_once "../classes/entrar.php";
     $acesso = new Ajudante();
    
     $acesso->email = $email;
     $acesso->senha = $senha; 
     $acesso->Acessar();
?>