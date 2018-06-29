<?= require_once "cabecalho.php"; ?>




        <!--AQUI É ONDE VAMOS COLOCAR AS COISAS TODAS!!!-->
        <div class="ui grid">
            <div class="four wide column">
                <img class="ui medium image imagem-informacoes" src="../../assets/images/blusa6.jpg">
            </div>
            <div class="right floated ten wide column textos-informacoes">
                <h1>Blusa estampada ombro a ombro</h1>
                <h1>Blusa ciganinha com estampa de fundo de fundo do mar! Composição: 96% viscose e 4% elastano.</h1>
                <h1>REF:22345</h1>
                <h1>R$65,00</h1>

                <select name="" id="seletor-tamanho">
                    <option selected value="p">Pequeno</option>
                    <option value="m">Médio</option>
                    <option value="g">Grande</option>
                </select>

                <h1 id="mostra-estoque">120 peças</h1>

                <button class="ui button" type="submit">Vender<i class="shop icon float right"></i></button>
            </div>
        </div>

        <!--aqui acaba as coisas!!!-->



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


<script>

    $('#seletor-tamanho').change(function(){
        var tamananho = $(this).val();

        if(tamananho == 'p'){
            $('#mostra-estoque').html('120 peças');
        }else if(tamananho == 'm'){
            $('#mostra-estoque').html('60 peças');

        }else {
            $('#mostra-estoque').html('100 peças');
        }

    });
</script>

</body>

</html>