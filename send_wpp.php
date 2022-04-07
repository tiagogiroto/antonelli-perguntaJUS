<?php
    include('verifica_login.php');
?>



<div class="id-login">
    <h2 class="nome-login">Ola, <?php echo $_SESSION['login']; ?></h2>
    <h2 class="sair"><a href='logout.php'>SAIR</a></h2>
</div>

<style>
  .id-login{
    margin-left: 93%;

  }
  .nome-login{
      font-size: 13px;
  }
  .sair{
      font-size: 15px;
  }
</style>
<!-- email de resposta a cada formulário de cliente -->
<?php


$URI = urldecode($_SERVER['REQUEST_URI']);
$whatIWant = substr($URI, strpos($URI, ':[{') + 3);    
$arrray = explode('","', $whatIWant);

$id = substr($arrray[0], strpos($arrray[0],"Id:")+5);
$id = strtr($id, '"', " ");
$id = strtr($id, ']', " ");
$id = strtr($id, '}', " ");


$sqlContatos =  ' UPDATE contato 
                SET resposta = 2 WHERE id_contato = ' . $id . '';

// criar registro de quem alterou 

date_default_timezone_set('America/Sao_Paulo');
$data_contato = date('m-d-Y h:i:s a', time());
$usuario_resposta = $_SESSION['login'];

$sql_LOG_Contatos = "INSERT INTO log_contato (id_contato,log,usuario_resposta, tipo_resposta)
                      VALUES ($id,'$data_contato','$usuario_resposta', 1)";



if (($conn->query($sqlContatos) === TRUE) && ($conn->query($sql_LOG_Contatos))) {
    echo "  <!DOCTYPE html> ";
    echo "  <html lang='en'> ";
    echo "<head>";
    echo "<meta charset='UTF-8'>";
    echo "<meta http-equiv='X-UA-Compatible' content='IE=edge'> ";
    echo " <meta name='viewport' content='width=device-width, initial-scale=1.0'> ";
    echo " <link href='https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css' rel='stylesheet' integrity='sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3' crossorigin='anonymous'> ";
    echo " <title>Pergunta JUS</title> ";
    echo " </head> ";
    echo "<body>";
    echo "<div class='card' style='width: 40rem; margin: 0 auto; float: none; margin-bottom: 10px; margin-top: 10%;'>";
    echo "<h1 style='text-align: center;' >Mensagem enviada!</h1>";
    echo " <div class=''> ";
    echo " <img style='width:10vw; height: auto;' class='mx-auto d-block' src='/v.png'> ";
    echo " </br>";
    echo " </div>";
    echo "</div>";
    echo "<div class='col text-center'>";
    echo "<button class='btn btn-primary' onClick='goTo()'>Ir para relatorios</button>";
    echo "</div>";
    echo "</body>";
    echo "</html>";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}


?>

<script>
    function goTo(){
        window.location.href = 'showDataFile.php';
    }
</script>