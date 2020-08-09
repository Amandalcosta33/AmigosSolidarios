<?php

require_once "Conexao.php";

    class Usuario{
        /*atributos*/
       public $id;
       public $nome;
       public $usuario;
       public $senha;
       public $adm;

    //    metodos
    public function listarTudo(){
        $query = "select * from cadastros";
        $conexao = Conexao::pegarConexao();
        $resultado = $conexao->query($query);
        $lista = $resultado->fetchAll();
        return $lista;
    }
    public function listarUm(){}

    public function inserir(){
        $query = "INSERT INTO cadastros( NOME, USUARIO, SENHA, ADM) VALUES ('{$this->nome}', '{$this->usuario}', '{$this->senha}', '{$this->adm}')";
        $conexao = Conexao::pegarConexao();
        $conexao->exec($query);
    }
    public function Alterar(){
       $query = "update cadastros set NOME = '{$this->nome}', USUARIO = '{$this->usuario}', SENHA = '{$this->senha}', ADM = '{$this->adm}' where id = {$this->id}";
        $conexao = Conexao::pegarConexao();
        $conexao->exec($query);
    }

    public function excluir(){
        $query = "delete from cadastros where id = '{$this->id}'";
        // exit;
        $conexao = Conexao::pegarConexao();
        $conexao->exec($query);

    }

    }

?>