<?php

include('verifica_login.php');

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
include('conexao.php');

$sqlContatos =  '
    UPDATE contato 
        SET resposta = 2
    WHERE 
        id_contato = '.$id.'
';

// criar registro de quem alterou 

date_default_timezone_set('America/Sao_Paulo');   
$data_contato = date('m-d-Y h:i:s a', time());  
$usuario_resposta = $_SESSION['login'] ;


$sql_LOG_Contatos = "
    INSERT INTO log_contato 
        (id_contato,log,usuario_resposta)
    VALUES
        ($id,'$data_contato','$usuario_resposta')
    ";

if (($conn->query($sqlContatos) === TRUE) && ($conn->query($sql_LOG_Contatos))) {
    echo "  <!DOCTYPE html> ";
    echo "  <html lang='en'> ";
    echo "<head>";
    echo "<meta charset='UTF-8'>"  ;
    echo "<meta http-equiv='X-UA-Compatible' content='IE=edge'> ";
    echo " <meta name='viewport' content='width=device-width, initial-scale=1.0'> ";
    echo " <link href='https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css' rel='stylesheet' integrity='sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3' crossorigin='anonymous'> " ;
    echo " <title>Pergunta JUS</title> ";
    echo " </head> ";
    echo "<body>";
    echo "<div class='card' style='width: 40rem; margin: 0 auto; float: none; margin-bottom: 10px; margin-top: 10%;'>";
    echo "<h1 style='text-align: center;' >Contato atualizado!</h1>";
    echo " <div class=''> " ;
    echo " <img style='width:10vw; height: auto;' class='mx-auto d-block' src='/v.png'> " ;  
    echo " </br>";
    echo " </div>";
    echo "</div>";
    echo "</body>";
    echo "</html>";
  } else {
    echo "Error: " . $sql . "<br>" . $conn->error;
  }



