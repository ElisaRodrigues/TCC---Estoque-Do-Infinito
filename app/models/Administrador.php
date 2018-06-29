<?php
require_once "Usuario.php";

class Administrador extends Usuario
{
    public $razao_social;
    public $cnpj;

    public function __construct($nome, $email, $senha, $telefone, $razao_social, $cnpj, $id_usuario = null){
        parent::__construct($nome, $email, $senha, $telefone, $id_usuario);

        $this->razao_social = $razao_social;
        $this->cnpj = $cnpj;

    }
}