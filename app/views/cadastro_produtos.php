<!DOCTYPE html>
<html>
<head>
    <!-- Standard Meta -->
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0">

    <!-- Site Properties -->
    <title>Cad_Produto</title>
    <link rel="stylesheet" type="text/css" href="../../assets/semantic/semantic.min.css">
    <link rel="stylesheet" type="text/css" href="../../assets/style.css">

    <script src="../../assets/library/jquery.min.js"></script>
    <script src="../../assets/semantic/components/visibility.js"></script>
    <script src="../../assets/semantic/components/sidebar.js"></script>
    <script src="../../assets/semantic/components/transition.js"></script>
    <script>
        $(document)
            .ready(function() {

                // fix menu when passed
                $('.masthead')
                    .visibility({
                        once: false,
                        onBottomPassed: function() {
                            $('.fixed.menu').transition('fade in');
                        },
                        onBottomPassedReverse: function() {
                            $('.fixed.menu').transition('fade out');
                        }
                    })
                ;

                // create sidebar and attach to menu open
                $('.ui.sidebar')
                    .sidebar('attach events', '.toc.item')
                ;

            })
        ;
    </script>
</head>
<body>

<!-- MENU FIXO -->
<div class="ui large top fixed hidden menu borderless">
    <div class="ui container">
        <a class="active item">Início</a>
        <a class="item">Ajuda</a>
        <a class="item">Sobre</a>
        <a class="item">Login</a>
        <div class="right menu">
            <div class="item">
                <a class="ui button">entrar</a>
            </div>
            <div class="item">
                <a class="ui primary button">cadastrar-se</a>
            </div>
        </div>
    </div>
</div>

<!-- Sidebar Menu -->
<div class="ui vertical inverted sidebar menu">
    <a class="active item">Início</a>
    <a class="item">Ajuda</a>
    <a class="item">Sobre</a>
    <a class="item">Login</a>
</div>

<!-- Page Contents -->
<div class="pusher">

    <div class="ui inverted vertical masthead center aligned segment tela-cadastro-produto" >

        <div class="ui container">
            <div class="ui large secondary inverted pointing menu">
                <a class="toc item">
                    <i class="sidebar icon"></i>
                </a>

                <a href="tela_inicio.php" class="active item">Início</a>
                <a href="ajuda.phtml" class="item">Ajuda</a>
                <a href="tela_sobre.html" class="item">Sobre</a>
                <br class="ui search"><br>
                <div class="ui transparent left icon input">
                    <input type="text" placeholder="Procurar">
                    <i class="search icon"></i>
                </div>
                <div class="results"></div>

            </div>
        </div>

<div class="ui text container form-sobre-fotos" >
    <div class="ui text container centered aligned">
        <h1><label><font color="white">Cadastro de Produto</font> </h1>
        </div><br>





        <!--formulario de cadastro -->
        <form class="ui form" action="../controllers/produto_controller.php?acao=salvar" method="post" enctype="multipart/form-data">

            <!-- NOME -->
            <div class="field">
                <label><font color="#363636">Nome do Produto</font></label>
                <input type="text" name="nome" placeholder="Nome">
            </div>

            <div class="ui form">
                <div class="two fields">

                    <!-- TIPO PRODUTO -->'
                    <div class="field">
                        <label><font color="#363636">Tipo</font></label>
                        <select name="tipoProduto" id="tipoProduto">
                            <option value="0">Selecione</option>
                            <?php foreach ($tipos as $tipo) : ?>
                                <option value="<?= $tipo['idTipoProduto'] ?>"><?= utf8_decode($tipo['tipo']) ?></option>
                            <?php endforeach; ?>
                        </select>
                    </div>

                    <!-- COR -->
                    <div class="field">
                        <label><font color="#363636" size="2">Cor</font></label>
                        <select type="cor" name="cor" id="cor">
                            <option value="0">Selecione</option>
                            <?php foreach ($cores as $cor) : ?>
                                <option value="<?= $cor['id_cor'] ?>"><?= utf8_decode($cor['cor']) ?></option>
                            <?php endforeach; ?>
                        </select>
                    </div>

                </div>

                <div class="ui form">
                    <div class="three fields">


                        <!-- TAMANHOOOOOOO -->
                        <div class="field">
                            <label><font color="#363636">Tamanho</font></label>
                            <select name="tamanho" id="tamanho">
                                <option value="0">Selecione</option>
                                <?php foreach ($tamanhos as $tamanho) : ?>
                                    <option value="<?= $tamanho['idTamanho'] ?>"><?= utf8_decode($tamanho['tamanho']) ?></option>
                                <?php endforeach; ?>
                            </select>
                        </div>

                        <!-- ESTOQUE MINIMO -->
                        <div class="field">
                            <label><font color="#363636" size="2">Estoque Mínimo</font></label>
                            <input type="text" name="estoqueMin" placeholder="Ex : 30">
                        </div>

                        <!-- ESTOQUE -->
                        <div class="field">
                            <label><font color="#363636">Estoque Atual</font></label>
                            <input type="text" name="estoque" placeholder="Ex: 100">
                        </div>
                    </div>

                    <!-- PREÇO -->
                    <div class="field">
                        <label><font color="#363636" size="2">PRECO</font></label>
                        <input type="text" name="preco" placeholder="200,00">
                    </div>

                </div>

                <!-- DESCRIÇÃO -->
                <div class="hundred wide field">
                    <label><font color="#363636">Descrição</font></label>
                    <label><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"></font></font></label>
                    <textarea rows="2" name="descricao" placeholder="Escreva aqui a descrição de seu produto."></textarea>
                </div>

                <!-- IMAGEM -->
                <div class="">
                    <label><font color="black">Importar Imagens</font></label>
                    <div class="hundred wide field">
                        <div class="hundred wide field">
                            <input type="file" name="imagem" >
                        </div>
                    </div>
                </div>
                <br>
                <button class="ui button" type="submit">Cadastrar</button>
            </form>
        </div>
    </div>

</div>
</div>










<!-- RODAPE-->
<div class="ui inverted vertical footer segment">
    <div class="ui container">
        <div class="ui stackable inverted divided equal height stackable grid">
            <div class="three wide column">
                <h4 class="ui inverted header">Sobre Nós</h4>
                <div class="ui inverted link list">
                    <a href="#" class="item">Onde estamos</a>
                    <a href="#" class="item">Clientes</a>
                    <a href="#" class="item">Relatos</a>
                    <a href="#" class="item">Contato</a>
                </div>
            </div>
            <div class="three wide column">
                <h4 class="ui inverted header">O que fazemos</h4>
                <div class="ui inverted link list">
                    <a href="#" class="item">Controle de estoque</a>
                    <a href="#" class="item">Vitrine Virtual</a>
                    <a href="#" class="item">Relatórios</a>
                </div>

            </div>
            <div class="seven wide column">
                <h4 class="ui inverted header">Siga-nos!</h4>
                <iframe src="https://www.facebook.com/plugins/like.php?href=https%3A%2F%2Fdevelopers.facebook.com%2Fdocs%2Fplugins%2F&width=450&layout=standard&data-colorscheme=dark&action=like&size=small&show_faces=false&share=true&height=35&appId" width="450" height="35" style="border:none;overflow:hidden" scrolling="no" frameborder="0" allowTransparency="true"></iframe>
            </div>
        </div>
    </div>
</div>

</div>

</body>

</html>