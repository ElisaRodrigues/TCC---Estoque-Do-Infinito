    <?php

    require_once '../database/Conexao.php';
    require_once '../models/Produto.php';

    class CrudProdutos{
        
        private $conexao;
        private $produto;
        
        public function __construct(){
            $this->conexao = Conexao::getConexao();
        }

        //cadastrar produto
        //OKAY
        public function cadastrar(Produto $produto, $tamanho){
            $sql = "INSERT INTO produtos (nome, preco, estoque, estoque_min, descricao, tamanho, cor,  idTipoProduto, imagem) 
                    VALUES ('{$produto->nome}', {$produto->preco}, {$produto->estoque}, {$produto->estoqueMin}, 
                    '{$produto->descricao}', '{$produto->tamanho}', '{$produto->cor}', {$produto->tipoProduto}, '{$produto->foto}')";
            $this->conexao->exec($sql);

            //$id = $this->conexao->lastInsertId();
            //$sqltamanho = "insert into tamanho (id_produto, tamanho) values ({$id}, '$tamanho')";
            //$this->conexao->exec($sqltamanho);

        }

        //retorna os tipos de produtos
        //OKAY
        public function getTiposProduto(){
            $res = $this->conexao->query("select * from tipo_produto order by tipo");
            $tipos = $res->fetchAll(PDO::FETCH_ASSOC);
            return $tipos;
        }

        //retorna os tamanhos dos produtos
        //EM PRODUÇÃO
        public function getTamanhoProduto(){
            $res = $this->conexao->query("select * from tamanho order by tamanho");
            $tamanho = $res->fetchAll(PDO::FETCH_ASSOC);
            return $tamanho;
        }

        //retorna todos produtos em forma de um array associativo
        //OKAY
        public function getProdutos(){
            $consulta = $this->conexao->query("SELECT * FROM produtos");

            $arrayProdutos = $consulta->fetchAll(PDO::FETCH_ASSOC);

            return $arrayProdutos;
        }

        //retorna um produto em forma de array associativo
        //OKAY
        public function getProduto($id){
            $consulta = $this->conexao->query("SELECT * FROM produtos WHERE id_produto = $id");
            $produto = $consulta->fetch(PDO::FETCH_ASSOC);
            return new Produto($produto['nome'], $produto['preco'], $produto['estoque'], $produto['estoque_min'], $produto['descricao'],
                               $produto['tamanho'], $produto['cor'], $produto['idTipoProduto'], $produto['imagem'], $produto['id_produto'] );
        }

        //excluir produto
        //OKAY
        public function excluir($idProduto){
            $this->conexao->exec("DELETE FROM produtos WHERE id_produto = $idProduto");
        }

        //editar produtos
        //FAZEEEEEEEEEEEEEEEER
        public function editar($idProduto, $produto){
            $this->conexao->exec("UPDATE Produtos SET '{$produto->nome}'                                                             
                                                                 {$produto->preco}, 
                                                                 {$produto->estoqueMin}, 
                                                                '{$produto->descricao}', 
                                                                '{$produto->tamanho}', 
                                                                '{$produto->cor}',
                                                                 {$produto->estoque},
                                                                 {$produto->imagem},
                                                                 {$produto->idTipoProduto} 
                                                                 {$produto->id_produto}
            WHERE id_produto = {$idProduto}");
        }


    }

    //$prod = new CrudProdutos();
    //$prod->getProdutos();