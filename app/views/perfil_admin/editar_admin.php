<?php require_once "indexperfil.php";
print_r($admin);

//exit();
?>



<div id="page-wrapper">
    <div id="page-inner" class="container">

        <!-- Page Content -->

        <!--formulario de cadastro -->
        <form class="ui form" action="http://localhost/tcc/app/controllers/usuario_controller.php?acao=salvar" method="post">

            <div class="field">
                <label><font color="#363636">Nome Completo</font></label>
                <input type="text" name="nome" value="<?= $admin->getNome(); ?>" placeholder="Nome completo">
            </div>
            <div class="field">
                <label><font color="#363636">Endereço de email</font></label>
                <input type="text" name="email" value="<?= $admin->getEmail(); ?>" placeholder="exemplo@exe.com">
            </div>
            <div class="field">
                <label><font color="#363636">CNPJ</font></label>
                <input type="number" name="cnpj" value="<?= $admin->cnpj(); ?>" placeholder="XX.XXX.XXX/0001-XX">
            </div>
            <div class="field">
                <label><font color="#363636">Telefone</font></label>
                <input type="number" name="telefone" value="<?= $admin->getTelefone(); ?>" placeholder="telefone">
            </div>
            <div class="field">
                <label><font color="#363636">Razão social</font></label>
                <input type="text" name="razao_social" value="<?= $admin->razao_social(); ?>" placeholder="Razão sozial">
            </div>
            <div class="field">
                <label><font color="#363636">Nome fantasia</font></label>
                <input type="text" name="nome_fantasia" value="<?= $admin->nome_fantasia(); ?>" placeholder="Nome fantasia">
            </div>
            <div class="field">
                <label><font color="#363636">Senha</font></label>
                <input type="text" name="senha" value="<?= $admin->getSenha(); ?>" placeholder="*********">
            </div>

            <button class="ui button" type="submit">Editar</button>
        </form>




        <!-- /. PAGE WRAPPER  -->
    </div>


    <?php require_once "rodape.php"; ?>


