<?php

//ARRUMAR O getVendedor

require_once '../database/Conexao.php';
require_once '../models/Administrador.php';

class CrudAdministrador{

    private $conexao;

    public function __construct(){
        $this->conexao = Conexao::getConexao();
    }

    //cadastrar user
    //OKAY
    public function cadastrar($usuario){

        $sql = "INSERT INTO usuarios (nome, email, senha, telefone) VALUES ('{$usuario->getNome()}', '{$usuario->getEmail()}', '{$usuario->getSenha()}', '{$usuario->getTelefone()}')";

        $this->conexao->exec($sql);

        $id = $this->conexao->lastInsertId(); //pega o ultimo id cadastrado

        $sql = "INSERT INTO administrador (razao_social, cnpj, idUsuarios) VALUES ('{$usuario->razao_social}', '{$usuario->cnpj}', '{$id}')";

        $this->conexao->exec($sql);
    }

    //retorna todos os users em forma de um array associativo
    //OKAY --- falta pegar os dados da table user
    public function getAdministradores(){
        $sql = "select * from administrador";
        $administradores = $this->conexao->query($sql)->fetchAll(PDO::FETCH_ASSOC);

        print_r($administradores);
    }

    //retorna um produto em forma de array associativo
    //EM PRODUÇÃO -- indefinido nome, email,senha, telefone,  id (o que esta cadastrado na table usuarios)
    public function getAdministrador($idAdministrador){
        //$consulta = $this->conexao->query("SELECT * FROM administrador WHERE idAdministrador  = $idAdministrador");
       // $administrador = $consulta->fetch(PDO::FETCH_ASSOC);

          $sql = "SELECT usuarios.nome,email,senha,telefone, administrador.razao_social,cnpj
                  FROM administrador INNER JOIN usuarios ON administrador.idUsuarios = usuarios.idUsuarios
                  WHERE usuaros.idUsuarios = idUsuarios ";

          $administrador = $this->conexao->query($sql)->fetchAll(PDO::FETCH_ASSOC);

        print_r($administrador);

        return new Administrador($administrador['nome'], $administrador['email'], $administrador['senha'], $administrador['telefone'], $administrador['razao_social'], $administrador['cnpj'], $administrador['id']);

    }

    //excluir administrador
    //OKAY
    public function excluir($idAdministrador){
        $this->conexao->exec("DELETE FROM administrador WHERE idAdministrador = $idAdministrador");
    }
}

$adm = new Administrador("ana","ana@teste.com", "123", 7468276482369, "maia", 8479582398723);

$crud = new CrudAdministrador();

$crud->getAdministradores();

//$crud->cadastrar($adm);

//$crud->excluir(14);