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
        //EM PRODUÇÃO
        public function cadastrar(Produto $produto){
            $sql = "INSERT INTO produtos (nome, preco, estoque, estoque_min, descricao, cor,  idTipoProduto, imagem) 
                    VALUES ('{$produto->nome}', {$produto->preco}, {$produto->estoque}, {$produto->estoqueMin}, 
                    '{$produto->descricao}', '{$produto->cor}', {$produto->tipoProduto}, '{$produto->imagem}')";
            $this->conexao->exec($sql);

            $id = $this->conexao->lastInsertId();

            //prod_tamanho
            $sql = "insert into prod_tamanho (idTamanho, idProdutos) values ({$produto->tamanho}, {$id})";
            $this->conexao->exec($sql);
        }

        //retorna os tipos de produtos
        //OKAY
        public function getTiposProduto(){
            $res = $this->conexao->query("select * from tipo_produto order by tipo");
            $tipos = $res->fetchAll(PDO::FETCH_ASSOC);
            return $tipos;
        }

        //retorna os tamanhos dos produtos
        //OKAY
        public function getTamanhos(){
            $res = $this->conexao->query("select * from tamanho order by tamanho");
            $tamanhos = $res->fetchAll(PDO::FETCH_ASSOC);
            return $tamanhos;
        }

        //retorna as cores dos produtos
        //OKAY
        public function getCores(){
            $res = $this->conexao->query("select * from cor order by cor");
            $cores = $res->fetchAll(PDO::FETCH_ASSOC);
            return $cores;
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
            $consulta = $this->conexao->query("SELECT * FROM produtos p, prod_tamanho t WHERE p.id_produto = {$id} and t.idProdutos=p.id_produto");
            $produto = $consulta->fetch(PDO::FETCH_ASSOC);
            return new Produto($produto['nome'], $produto['preco'], $produto['estoque'], $produto['estoque_min'], $produto['descricao'],
                               $produto['idTamanho'], $produto['cor'], $produto['idTipoProduto'], $produto['imagem'], $produto['id_produto'] );
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


//    $prod = new Produto("Teste", 200, 344, 100, "bla", "", "vermelha", "casaco","", "" );

//    $crud = new CrudProdutos();

//    $crud->getProduto(21);