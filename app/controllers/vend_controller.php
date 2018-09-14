<?php

require __DIR__.'/../crud/CrudVendedor.php';

function listar(){
    $crud = new CrudVendedor();
    $vendedores = $crud->getVendedores();
    include __DIR__."/../views/perfil_admin/visualizarvendedores.php";
}

function cadastrar(){
    $crud = new CrudVendedor();
    include __DIR__.'/../views/cadastro_vend.html';
}

function salvar(){ //DANDO ERRO
    echo "<pre>";

    $usuario = new Vendedor($_POST['nome'], $_POST['email'], $_POST['senha'], $_POST['telefone'], $_POST['cpf'],$_POST['empresa']);
        $vend = new CrudVendedor();
    $resultado = $vend->cadastrar($usuario);

    header("Location: produto_controller.php?acao=listar'");
}

function editar(){
    $crud = new CrudVendedor();
    $vend = $crud->getVendedor(4);
    require_once __DIR__."/../views/perfil_vendedor/editar_vendedor.php";
}

function excluir($id){
    $crud = new CrudVendedor();
    $crud->excluir($id);
    require __DIR__.'/produto_controller.php?acao=listar';
}

//ROTAS
if (isset($_GET['acao']) && !empty($_GET['acao']) ) {

    if ($_GET['acao'] == 'cadastrar') {
        //echo "chegou na rota";
        cadastrar();

    } elseif ($_GET['acao'] == 'salvar') {
        salvar();

    } elseif ($_GET['acao'] == 'editar') {
        editar();

    }elseif ($_GET['acao'] == 'excluir') {
        excluir($_GET['id']);

    }elseif ($_GET['acao'] == 'listar') {
        listar();

    }else {
        require '../views/cadastro_vend.html';
    }
} else {
    require '../views/cadastro_vend.html';
}