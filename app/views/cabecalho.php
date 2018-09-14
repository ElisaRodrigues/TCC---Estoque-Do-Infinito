<!DOCTYPE html>
<html>
<head>
    <!-- Standard Meta -->
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0">

    <!-- Site Properties -->
    <title>Projeto</title>
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

        <div class="ui container">
            <div class="ui large secondary inverted pointing menu">
                <a class="toc item">
                    <i class="sidebar icon"></i>
                </a>

                <a href="http://localhost/tcc/app/views/tela_inicio.php" class="active item">Início</a>
                <a href="http://localhost/tcc/app/views/ajuda.phtml" class="item">Ajuda</a>
                <a href="http://localhost/tcc/app/views/tela_sobre.php" class="item">Sobre</a>
                <br class="ui search"><br>
                    <div class="ui transparent left icon input">
                    <input type="text" placeholder="Procurar">
                    <i class="search icon"></i>
                </div>
                    <div class="results"></div>

            </div>
        </div>