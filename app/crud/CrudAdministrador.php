<?php
require_once '../database/Conexao.php';
require_once '../models/Administrador.php';

class CrudAdministrador{

    private $conexao;

    public function __construct(){
        $this->conexao = Conexao::getConexao();
    }

    public function cadastrar($usuario){

        $sql = "INSERT INTO usuarios (nome, email, senha, telefone) VALUES ('{$usuario->getNome()}', '{$usuario->getEmail()}', '{$usuario->getSenha()}', '{$usuario->getTelefone()}')";
        $this->conexao->exec($sql);

        $id = $this->conexao->lastInsertId(); //pega o ultimo id cadastrado
        $sq = "INSERT INTO administrador (razao_social, nome_fantasia, cnpj, id_usuarios) VALUES ('{$usuario->razao_social}', '{$usuario->nome_fantasia}', '{$usuario->cnpj}', '{$id}')";
        $this->conexao->exec($sq);
    }

    public function getAdministradores(){
        $sql = "select * from administrador";
        $administradores = $this->conexao->query($sql)->fetchAll(PDO::FETCH_ASSOC);

        print_r($administradores);
    }

    public function getAdministrador($idAdministrador){
        $sql = "SELECT usuarios.idUsuarios, usuarios.nome,email,senha,telefone, administrador.razao_social,nome_fantasia,cnpj
                  FROM administrador INNER JOIN usuarios ON administrador.id_usuarios = usuarios.idUsuarios
                  WHERE usuarios.idUsuarios = id_usuarios ";
        $administrador = $this->conexao->query($sql)->fetch(PDO::FETCH_ASSOC);

        return new Administrador($administrador['nome'], $administrador['email'], $administrador['senha'], $administrador['telefone'], $administrador['razao_social'], $administrador['nome_fantasia'], $administrador['cnpj'], $administrador['idUsuarios']);

    }

    public function excluir($idAdministrador){
        $this->conexao->exec("DELETE FROM administrador WHERE idAdministrador = $idAdministrador");
    }

//Dar uma olhadinha com muito carinho
    public function editar(Administrador $idAdministrador){
        $this->conexao->exec("UPDATE Administrador SET '{$administrador->nome}'                                                             
                                                                 '{$administrador->email}',
                                                                 '{$administrador->senha}',
                                                                  {$administrador->telefone},
                                                                 '{$administrador->razao_social}', 
                                                                 '{$administrador->nome_fantasia}', 
                                                                  {$administrador->cnpj}, 
                                                                  {$administrador->idUsuario}
            WHERE idAdministrador = {$idAdministrador}");
    }
}

//TESTES

//$adm = new Administrador("leaneth","leaneth@teste.com", "123", 65432189, "leaneth", "leaneth" ,46587427649);

//$crud = new CrudAdministrador();

//$crud->getAdministradores(); //Okay - funcionando

//$crud->getAdministrador(31); //Okay - funcionando

//$crud->cadastrar($adm); //Okay - funcionando

//$crud->excluir(1); //Okay - funcionando