<?php

require_once __DIR__. '/../crud/CrudAdministrador.php';
require_once __DIR__. '/../models/Administrador.php';

function listarAdmin($id){
    $administrador = new CrudAdministrador();
    $admin = $administrador->getAdministrador($idAdministrador);
    include __DIR__."/../views/perfil_admin/visualizarvendedores.php";
}

function cadastrarAdmin(){
    $crud = new CrudAdministrador();
    include '../views/cadastro_admin.php';
}

function salvarAdmin(){ //DANDO ERRO
    echo "<pre>";

    $usuario = new Administrador($_POST['nome'], $_POST['email'], $_POST['senha'],  $_POST['telefone'], $_POST['razao_social'], $_POST['nome_fantasia'], $_POST['cnpj']);
    $adm = new CrudAdministrador();
    $resultado = $adm->cadastrar($usuario);

    header("Location: http://localhost/tcc/app/controllers/produto_controller.php?acao=listar");
}

    function editarAdmin(){
        $crud = new CrudAdministrador();

        $admin = $crud->getAdministrador(4);

        require_once "../views/perfil_admin/editar_admin.php";

    }

function excluirAdmin($id){
    $crud = new CrudAdministrador();
    $crud->excluir($id);
    require 'http://localhost/tcc/app/controllers/produto_controller.php?acao=listar';
}
//ROTAS
if (isset($_GET['acao']) && !empty($_GET['acao']) ) {

    if ($_GET['acao'] == 'cadastrar') {
        echo "chegou na rota";
        cadastrarAdmin();

    } elseif ($_GET['acao'] == 'salvar') {
        salvarAdmin();

    } elseif ($_GET['acao'] == 'editarAdmin') {
        editarAdmin();

    }elseif ($_GET['acao'] == 'excluir') {
        excluirAdmin($_GET['id']);

    }}elseif ($_GET['acao'] == 'listarAdmin') {
        listarAdmin($_GET['id']);

    } else {
        require 'http://localhost/tcc/app/views/cadastro_admin.php';
    }