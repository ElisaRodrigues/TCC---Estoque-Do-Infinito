<?php

$tipo = $_GET['tipo'];

if($tipo == 'admin'){
    echo('<meta http-equiv="refresh" content="0;url=cadastro_admin.html">');
}elseif($tipo == 'vendedor'){
    echo('<meta http-equiv="refresh" content="0;url=cadastro_vend.html">');

}