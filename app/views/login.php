<?php

//arquivo que recebe os dados enviados via POST pelo form de login
//verificar os dados de login e senha e redirecionar
//se os dadoa estao corretos, redirecionar para perfil ou pagina inicial do usuario logado
//se nao estiverem, redirecionar para login.html

$login = $_POST['email'];
$senha = $_POST['password'];

//faria uma consulta no BD, pra ver se existe algum usuario com esses dados


if($login == 'admin@teste.com' and $senha='12345') {
    echo('<meta http-equiv="refresh" content="0; url=tela_perfil_admin.html">');
}elseif($login == 'vendedor@teste.com' and $senha='12345'){
    echo('<meta http-equiv="refresh" content="0; url=tela_perfil_vend.html">');
}else{
    echo('<meta http-equiv="refresh" content="0;url=login.html">');

}

