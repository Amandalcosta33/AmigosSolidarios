<?php
    $id = $_POST['ID'];
    $nome = $_POST['NOME'];
    $usuario = $_POST['USUARIO'];
    $adm = $_POST['ADM'];
    $senha = $_POST['SENHA'];
   
    
     require_once "../classes/Usuarios.php";
    
     $novo = new Usuario();
     $novo->id = $id;
     $novo->nome = $nome;
     $novo->usuario = $usuario;
     $novo->senha = $senha;
     $novo->adm = $adm;
     $novo->Alterar();

     echo "Usuario {$nome} alterada com sucesso.";


?>