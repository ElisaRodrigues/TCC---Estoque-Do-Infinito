<?php 

require_once '../crud/CrudProdutos.php';
require_once '../models/Produto.php';


function cadastrar(){ //OKAY
    $crud = new CrudProdutos();
    $tipos = $crud->getTiposProduto();
    $tamanho = $crud->getTamanhoProduto();

	include '../views/cadastro_produtos.php';
}

function salvar(){ //DANDO ERRO
     echo "<pre>";
//    print_r($_POST);
//    print_r($_FILES);

    $origem = $_FILES['imagem']['tmp_name'];
    $destino = date('dmyhis').$_FILES['imagem']['name'];

    move_uploaded_file($origem, '../../assets/images/'.$destino);


    $produto = new Produto($_POST['nome'], $_POST['preco'], $_POST['estoque'],  $_POST['estoqueMin'], $_POST['descricao'],$_POST['tamanho'], $_POST['cor'], $_POST['tipoProduto'], $destino);

    $crud = new CrudProdutos();
    $resultado = $crud->cadastrar($produto, $_POST['tamanho']);

    if ($resultado == 1) {
        listar();
    }
}

function listar(){ //OKAY
    $crud = new CrudProdutos();
    $listaProdutos = $crud->getProdutos();

    require '../views/tela_catalogo.php';
}

function editar ($id){ //TA DANDO ERRADO
    $crud     = new CrudProdutos();
    $tipos = $crud->getTiposProduto();

    $produto  = $crud->getProduto($id);

    include '../views/editar_produto.php';
}

function excluir($id){ //OKAY
    $crud = new CrudProdutos();
    $crud->excluir($id);

    listar();
}

//ROTAS
if (isset($_GET['acao']) && !empty($_GET['acao']) ) {

	if ($_GET['acao'] == 'cadastrar') {
		echo "chegou na rota";
		cadastrar();
	
	} elseif ($_GET['acao'] == 'salvar') {
		salvar();

	} elseif ($_GET['acao'] == 'editar') {
		editar($_GET['id']);

	} elseif ($_GET['acao'] == 'excluir') {
		excluir($_GET['id']);

	} elseif ($_GET['acao'] == 'listar') {
        listar();

    } elseif ($_GET['acao'] == 'detalhar') {
        listar();

	} else {
		echo "sera redirecionado pra lista";
	}
} else {
	listar();
}

return editar();