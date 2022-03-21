<?php
session_start();
include('conexao.php');

$autorizacao;
$login = $_SESSION['login'];

$query = "select autorizacao from login where login = '{$login}' ";
$result = mysqli_query($conn, $query);

while ($row = $result->fetch_assoc()) {
    $autorizacao = $row['autorizacao'];   
}
$_SESSION['autorizacao'] = $autorizacao;

if(!$_SESSION['login']){
    header('Location: index.php');
    exit();

}

?>