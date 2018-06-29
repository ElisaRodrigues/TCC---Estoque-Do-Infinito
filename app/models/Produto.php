<?php


class Produto {

    public $id;

    public $nome;
    public $cor;

    public $preco;
    public $estoqueMin;
    public $descricao;
    public $estoque;
    public $tipoProduto;
    public $foto;
    public $tamanho;

    //cor, tamanho, descricao

    function __construct($nome, $preco, $estoque, $estoqueMin, $descricao = null, $tamanho = null, $cor, $tipoProduto, $foto = null, $id = null) {

    	$this->nome = $nome;
        $this->preco = $preco;
        $this->estoque = $estoque;
        $this->estoqueMin = $estoqueMin;
        $this->tipoProduto = $tipoProduto;
        $this->descricao = $descricao;
        $this->tamanho =$tamanho;
        $this->cor = $cor;
        $this->foto = $foto;
        $this->id = $id;

    }
}