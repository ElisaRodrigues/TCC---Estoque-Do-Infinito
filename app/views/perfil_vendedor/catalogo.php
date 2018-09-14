<?php require_once "indexperfil.php" ?>

<!-- /. NAV SIDE  -->
<div id="page-wrapper">
    <!-- Page Content -->

    <div id="page-inner" class="container">
        <div class="row">
            <?php foreach ($vendedores as $vendedor ):?>
                <div class="col-md-3 col-sm-12">
                    <div class="thumbnail">
                        <a href="#"><img class="card-img-top" src="http://www.azzaboutique.com.br/image/cache/data/blazer%20chic-600x600.jpg" alt=""></a>
                        <div class="card-body">
                            <h4 class="card-title">
                                <a href="http://localhost/tcc/app/controller/produto_controller.php?acao=detalhar"><?php echo $vendedor['nome'] ?></a>
                            </h4>
                            <p class="card-text"><?php echo $vendedor['preco'] ?></p>
                        </div>
                    </div>
                </div>
            <?php endforeach;?>
        </div>
    </div>

</div>

<?php require_once "rodape.php"; ?>