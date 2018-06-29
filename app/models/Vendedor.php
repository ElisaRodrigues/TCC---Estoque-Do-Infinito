<?php

    require_once "Usuario.php";

class Vendedor extends Usuario {
    public $cpf;
    public $empresa;

    public function __construct($nome, $email, $senha, $telefone, $cpf, $empresa ,$id_usuario = null){
        parent::__construct($nome, $email, $senha, $telefone, $id_usuario);

        $this->cpf = $cpf;
        $this->empresa = $empresa;

    }

    public function getId(){
        return $this->id;
    }

    public function setId($id){
        $this->id = $id;
    }
}
