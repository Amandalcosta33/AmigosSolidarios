<?php

session_start();

require_once "Conexao.php";

class Ajudante{
    /*atributos*/
   public $email;
   public $senha;
   public $nome;

   //    metodos
   public function Acessar(){
       $query = "SELECT email, senha FROM ajudantes WHERE email = '{$this->email}' AND senha = '{$this->senha}'";
       $conexao = Conexao::pegarConexao();
       $resultado = $conexao->query($query);
       $linhas = $resultado->fetchAll();
       if(!$linhas){
           echo "erro";
       } else {
        //  $_SESSION['ADM'] = $linhas[0][3]; 
        echo "ok";
        // header("location:/AmigosSolidarios/ajudante/index.php");  
       }
   }


    public function Cadastrar(){
        $query = "INSERT INTO ajudantes( nome, email, senha) VALUES ('{$this->nome}','{$this->email}','{$this->senha}')";
        $conexao = Conexao::pegarConexao();
        $conexao->exec($query);
    }
}

?>