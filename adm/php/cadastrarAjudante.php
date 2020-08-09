<?php

$nome = $_POST['nome'];
$email = $_POST['email'];
$senha = $_POST['senha'];

 require_once "../classes/entrar.php";
 $acesso = new Ajudante();

 $acesso->nome = $nome;
 $acesso->email = $email;
 $acesso->senha = $senha; 

 $acesso->Cadastrar();
?>