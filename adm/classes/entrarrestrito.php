<?php

session_start();

require_once "Conexao.php";

class Login{
    /*atributos*/
   public $usuario;
   public $senha;

   //    metodos
   public function Acessar(){
       $query = "SELECT USUARIO, SENHA, NOME, ADM FROM cadastros WHERE USUARIO = '{$this->usuario}' AND SENHA = '{$this->senha}'";
       $conexao = Conexao::pegarConexao();
       $resultado = $conexao->query($query);
       $linhas = $resultado->fetchAll();
       if(!$linhas){
           echo "erro";
       } else {
        $_SESSION['ADM'] = $linhas[0][3];
        $_SESSION['NOME'] = $linhas[0][2];
        echo "ok";
        // header("location:/AmigosSolidarios/adm/index.php");  
       }
   }
}

?>