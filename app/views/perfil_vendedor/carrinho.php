<?php require_once "indexperfil.php"; ?>

<link href="../../../assets/css/tiloCarrinho.css" rel="stylesheet" />


<div id="page-wrapper">
    <!-- Page Content -->
    <div id="page-inner" class="container">


    <div class="row">

        <div class="col-10">
            <div class="table-responsive">
                <label class="col-md-12">
                    <h2 class="ui horizontal divider header">Meu carrinho <span class="glyphicon glyphicon-shopping-cart" aria-hidden="true"></span>
                    </h2>
            </div><br>
            <br>


            <table class="table table-striped">
                <thead>
                <tr>
                    <th scope="col"> </th>
                    <th scope="col">Referência</th>
                    <th scope="col">Nome</th>
                    <th scope="col">Tamanho</th>
                    <th scope="col">Cor</th>
                    <th scope="col" class="text-center">Quantidade</th>
                    <th scope="col" class="text-right">Preço</th>
                    <th scope="col">Excluir</th>

                    <th> </th>
                </tr>
                </thead>
                <tbody>
                <tr>
                    <td><img src="https://dummyimage.com/50x50/55595c/fff" /> </td>
                    <td>2341</td>
                    <td>Blusa</td>
                    <td>M</td>
                    <td>Amarelo</td>
                    <td><input class="form-control" type="text" value="1" style="margin-left: 170px; width: 130px" /></td>
                    <td class="text-right">124,90</td>
                    <td class="text-right"><button class="btn btn-sm btn-danger"><i class="fa fa-trash"></i> </button> </td>
                </tr>
                <tr>
                    <td><img src="https://dummyimage.com/50x50/55595c/fff" /> </td>
                    <td>6542</td>
                    <td>Moletom</td>
                    <td>G</td>
                    <td>Preto</td>
                    <td><input class="form-control" type="text" value="1" style="margin-left: 170px; width: 130px"/></td>
                    <td class="text-right">33,90 </td>
                    <td class="text-right"><button class="btn btn-sm btn-danger"><i class="fa fa-trash"></i> </button> </td>
                </tr>
                <tr>
                    <td><img src="https://dummyimage.com/50x50/55595c/fff" /> </td>
                    <td>2364</td>
                    <td>Camisa</td>
                    <td>P</td>
                    <td>Rosa</td>
                    <td><input class="form-control" type="text" value="1" style="margin-left: 170px; width: 130px" /></td>
                    <td class="text-right">70,00 </td>
                    <td class="text-right"><button class="btn btn-sm btn-danger"><i class="fa fa-trash"></i> </button> </td>
                </tr>
                <tr>
                    <td><strong>Total</strong></td>
                    <td class="text-right"><strong>346,90</strong></td>
                </tr>

                </tbody>
            </table>
        </div>
    </div>
    <div class="col mb-2">
        <div class="row">
            <div class="col-sm-12  col-md-6">
                <a href="catalogo.php"><button class="btn btn-block btn-light"><span class="glyphicon glyphicon-plus-sign" aria-hidden="true"></span> Adicionar produtos</span></button>
            </div>
            <div class="col-sm-12 col-md-6 text-right">
                <button class="btn btn-lg btn-block btn-success text-uppercase"> Solicitar venda <span class="glyphicon glyphicon-ok-circle" aria-hidden="true"></span></button>
            </div>
        </div>
    </div>
</div>
</div>




<?php require_once "rodape.php"; ?>