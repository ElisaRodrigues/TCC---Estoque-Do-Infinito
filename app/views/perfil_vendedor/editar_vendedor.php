
/**
 * Created by PhpStorm.
 * User: Elisabeth Rodrigues
 * Date: 13/08/2018
 * Time: 21:57
 */

<?php require_once "indexperfil.php";
print_r($vend);

//exit();
?>



<div id="page-wrapper">
    <div id="page-inner" class="container">

        <!-- Page Content -->

        <!--formulario de edicao -->
        <form class="ui form" action="../../controllers/controller_vend.php?acao=inserir" method="post">
            <!--NOME -->
            <div class="field">
                <label><font color="#363636">Nome Completo</font></label>
                <input type="text" name="nome" placeholder="Nome completo">
            </div>
            <!--TELEFONE -->
            <div class="field">
                <label><font color="#363636">Telefone</font></label>
                <input type="text" name="telefone" placeholder="Telefone">
            </div>

            <!--EMAIL -->
            <div class="field">
                <label><font color="#363636">Endereço de email</font></label>
                <input type="text" name="email" placeholder="exemplo@exe.com">
            </div>

            <!--CPF -->
            <div class="field">
                <label><font color="#363636">CPF</font></label>
                <input type="text" name="cpf" placeholder="XXX.XXX.XXX-XX">
            </div>

            <!--EMPRESA -->
            <div class="field">
                <label><font color="#363636">Empresa</font></label>
                <input type="text" name="empresa" placeholder="Empresa para qual trabalha: nome fantasia" id="nome">
            </div>
            <!--senha -->
            <div class="field">
                <label><font color="#363636">Senha</font></label>
                <input type="text" name="senha" placeholder="*********">
            </div>

            <button class="ui button">Cadastrar</button>
        </form>

        <!-- /. PAGE WRAPPER  -->
    </div>
    <?php require_once "rodape.php"; ?>


