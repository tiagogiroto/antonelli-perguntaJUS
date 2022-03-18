
<?php
$URI = urldecode($_SERVER['REQUEST_URI']);
$whatIWant = substr($URI, strpos($URI, ':[{') + 3);    
$arrray = explode('","', $whatIWant);

$id = substr($arrray[0], strpos($arrray[0],"ID:")+5);
$id = strtr($id, '"', " ");
$id = strtr($id, '"', " ");
// $id = strtr($id, '"', " ");
$id = strtr($id, ']', " ");
$id = strtr($id, '}', " "); 

// trocar id tabela de contatos

// criar registro de quem alterou 

// gravar registro de quem alterou



include('conexao.php');

