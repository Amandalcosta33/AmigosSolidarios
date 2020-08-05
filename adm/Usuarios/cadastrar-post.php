<?php

    $novo_nome = $_POST['nome'];
    $nova_senha = $_POST['senha'];
    $novo_usuario = $_POST['usuario'];
    $novo_adm = $_POST['adm'];
    
     require_once "../classes/Usuarios.php";
    
     $usuario = new Usuario();
    
     $usuario->usuario = $novo_usuario;
     $usuario->nome = $novo_nome;
     $usuario->senha = $nova_senha;
     $usuario->adm = $novo_adm;

     $usuario->inserir();

     echo "Novo usuario {$novo_nome} inserido com sucesso.";


?>