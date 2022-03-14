
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
<?php 
$URI = urldecode($_SERVER['REQUEST_URI']);
$whatIWant = substr($URI, strpos($URI, ':[{') + 3);    
$arrray = explode('","', $whatIWant);


$assunto = substr($arrray[0], strpos($arrray[0],"Assunto:")+10);
$assunto = strtr($assunto, '"', " ");


$problema = substr($arrray[1], strpos($arrray[1],"Problema:")+11);
$problema = strtr($problema,'"',"");


$nome = substr($arrray[2], strpos($arrray[2],"Nome:")+6);
$nome = strtr($nome, '"', " ");

$email = substr($arrray[3], strpos($arrray[3],"Email:") +7);
$email = strtr($email, '"', " ");

$tel = substr($arrray[4], strpos($arrray[4],"Telefone:") +10);
$tel = strtr($tel, '"', " ");


$localiz = substr($arrray[5], strpos($arrray[5],"Local:") +7);
$localiz = strtr($localiz, '"', " ");
$local = strtr($localiz, '"', " ");
$localiz = strtr($localiz, ']', " ");
$localiz = strtr($localiz, '}', " ");



include('conexao.php');

// # Executa a query desejada 
$sql = "INSERT INTO contato(assunto,problema,nome,email,tel,localiz) VALUES ('$assunto','$problema','$nome','$email','$tel','$localiz')";

if ($conn->query($sql) === TRUE) {
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
    echo "<h1 style='text-align: center;' >Mensagem enviada !</h1>";
    echo " <div class=''> " ;
    echo " <img style='width:10vw; height: auto;' class='mx-auto d-block' src='/v.png'> " ;  
    echo " </div>";
    echo " <h3 style='text-align: center;'>Aguarde novas instruções via email ou telefone.</>";
    echo "</div>";
    echo "</body>";
    echo "</html>";
  } else {
    echo "Error: " . $sql . "<br>" . $conn->error;
  }

  
?>

