<?php
session_start();
include('conexao.php');

if(empty($_POST['login']) || empty($_POST['senha'])) {
    header('Location: login_page.php');
    exit();
} 

$login = mysqli_real_escape_string($conn, $_POST['login']);
$senha = mysqli_real_escape_string($conn, $_POST['senha']);


$query = "select id_login, login from login where login = '{$login}' and senha = md5('{$senha}')";

$result = mysqli_query($conn, $query);

$row = mysqli_num_rows($result);

if($row == 1) {
    $_SESSION['login'] = $login;
    header('Location: pagina_inicial.php');
    exit();
} else {
    $_SESSION['nao_autenticado'] = true;
    header('Location: login_page.php');   
    exit();
}

?>