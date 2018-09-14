<?php require_once "indexperfil.php"; ?>


<div id="page-wrapper">
    <!-- Page Content -->

    <div id="page-inner" class="container">

        <?php foreach($produtos as $produto): ?>

        <div class="row">

            <div class="col-md-6 col-sm-12">
                <div class="thumbnail">
                    <a href="#"><img class="card-img-top" src="http://www.azzaboutique.com.br/image/cache/data/blazer%20chic-600x600.jpg" alt=""></a>

                </div>
                <h3 class="ui horizontal divider header"><i class="tag icon"></i>Descrição</h3>
                <div class="panel panel-primary">

                    <div class="panel-body">
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum tincidunt est vitae ultrices accumsan. Aliquam ornare lacus adipiscing, posuere lectus et, fringilla augue.</p>
                    </div>


                </div>
            </div>

            <div class="col-md-5" style="background: rgba(173, 216, 230, 0.55);">

                    <h2 style="color: #0a256a; margin-top: 20px">COLETE JEANS MARMORIZADO</h2>
                    <h3>Referência: 53427</h3>
                    <h3 style="color: #0A0A0A">Preço: R$29,90</h3>
                    <h3 style="color: #0a256a">*Tamanho:</h3>
                    <select name="select" class="estiloselect">
                        <option value="valor1">P</option>
                        <option value="valor2" selected>M</option>
                        <option value="valor3">G</option>
                    </select>

                    <h3 style="color: #0a256a">*Cor:</h3>
                    <select name="select" class="estiloselect">
                        <option value="valor1">amarelo</option>
                        <option value="valor2" selected>verde</option>
                        <option value="valor3">vermelho</option>
                    </select>
                    <h3 style="color: #0a256a">*Quantidade:</h3>
                    <input type="number" style="size: 130px; width: 111px; margin-right: 300px" class="estiloselect">
                    <button id="botaovenda" class="ui button" onclick="alert('Seja bem vindo(a) ao Linha de Código.')"type="submit">Vender<i class="shop icon float right"></i></button>
            </div>
        </div>
    </div>
</div>
    
<?php require_once "rodape.php"; ?>