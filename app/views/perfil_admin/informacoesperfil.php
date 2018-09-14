<?php require_once "indexperfil.php"; ?>

<div id="page-wrapper">
    <div id="page-inner" class="container">

        <!-- Page Content -->


        <div class="col-md-6 col-sm-4" style="margin-left: 250px; margin-top: 100px">
            <div class="panel panel-primary" >
                <div class="panel-heading">
                    Informações
                </div>
                <div class="panel-footer">
                    Nome: echo <?php $administrados->getNome; ?>
                </div>

                <div class="panel-footer">
                    Email: <?php echo $admin->getEmail; ?>
                </div>

                <div class="panel-footer">
                    Telefone: <?php echo $admin->telefone; ?>
                </div>

                <div class="panel-footer">
                    CNPJ: <?php echo $admin->cnpj; ?>
                </div>

                <div class="panel-footer">
                    Razão Social: <?php echo $admin->razao_social; ?>
                </div>

                <div class="panel-footer">
                    Nome Fantasia: <?php echo $admin->nome_fantasia; ?>
                </div>

            </div>
        </div>
        <a href="http://localhost/tcc/app/controllers/admin_controller.php?acao=excluir&idAdministrador=<?= $administrador->idAdministrador; ?>">Excluir conta</a>




        <!-- /. PAGE WRAPPER  -->
    </div>


    <?php require_once "rodape.php"; ?>


