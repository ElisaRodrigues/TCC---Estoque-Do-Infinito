<?php

require_once '../database/Conexao.php';
require_once '../models/Usuario.php';

class CrudUsuario{

    //retorna todos os users em forma de um array associativo
    //OKAY
    public function getUsuarios(){
        $sql = "select * from usuarios";
        $usuarios = $this->conexao->query($sql)->fetchAll(PDO::FETCH_ASSOC);

        print_r($usuarios);
    }

    //excluir usuario
    //OKAY
    public function excluirUsuario($idUsuario){
        $this->conexao->exec("DELETE FROM usuarios WHERE idUsuarios = $idUsuario");
    }
}