<?php
session_start();
require 'Conection/conexao.php';

$email= $_POST['email'];
$senha= $_POST['senha'];
//$descript = md5($senha);

$wary = "SELECT * FROM usuarios WHERE email = '{$email}' AND senha = '{$senha}'"; //$descript na senha
$exec = $conexao->query($wary);
$result = $exec;

$tipoAdmin = "SELECT * FROM administrador, usuarios WHERE idUsuarios = id_usuarios";
$tipoVend = "SELECT * FROM vendedor, usuarios WHERE idUsuarios = id_usuarios";

$admins = $conexao->query($tipoAdmin)->fetch_all(PDO::FETCH_ASSOC);

if (mysqli_num_rows($result) != 1){
    session_start();
    $_SESSION['error_login'] = "Error - Usuario ou Senha Inválidos";
    header("Location: http://localhost/tcc/app/views/login.php");
}else{
    session_start();
    $result = mysqli_fetch_assoc($result);
    $ab = 0;
    foreach ($admins as $adm){
        if ($adm[2] == $result['idUsuarios']){
            $_SESSION['tipo_user'] = 'admin';
            $ab += 1;
        }
    }

    echo $ab;
    if ($ab == 0){
        $_SESSION['tipo_user'] = 'vendedor';
    }
    $_SESSION['id_user'] = $result['idUsuarios'];
    $_SESSION['nome'] = $result['nome'];
    header("Location: http://localhost/tcc/app/controllers/produto_controller.php?acao=listar");
}