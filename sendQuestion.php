<!-- 
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
</style> -->

<?php 
$URI = urldecode($_SERVER['REQUEST_URI']);
$whatIWant = substr($URI, strpos($URI, ':[{') + 3);    
$arrray = explode('","', $whatIWant);



$nome = substr($arrray[0], strpos($arrray[0],"Nome:")+7);
$nome = strtr($nome, '"', " ");


$profissao = substr($arrray[1], strpos($arrray[1],"Profissao:")+11);
$profissao = strtr($profissao, '"', " ");


$cpf = substr($arrray[2], strpos($arrray[2],"Cpf:")+5);
$cpf = strtr($cpf, '"', " ");


$rg = substr($arrray[3], strpos($arrray[3],"Rg:")+4);
$rg = strtr($rg, '"', " ");


$email = substr($arrray[4], strpos($arrray[4],"Email:")+7);
$email = strtr($email, '"', " ");


$telefone = substr($arrray[5], strpos($arrray[5],"Telefone:")+10);
$telefone = strtr($telefone, '"', " ");


$cep = substr($arrray[6], strpos($arrray[6],"Cep:")+5);
$cep = strtr($cep, '"', " ");


$bairro = substr($arrray[7], strpos($arrray[7],"Bairro:")+8);
$bairro = strtr($bairro, '"', " ");


$complemento = substr($arrray[8], strpos($arrray[8],"Complemento:")+13);
$complemento = strtr($complemento, '"', " ");


$rua = substr($arrray[9], strpos($arrray[9],"Rua:")+5);
$rua = strtr($rua, '"', " ");


$estado = substr($arrray[10], strpos($arrray[10],"Estado:")+8);
$estado = strtr($estado, '"', " ");
 

$cidade = substr($arrray[11], strpos($arrray[11],"Cidade:")+8);
$cidade = strtr($cidade, '"', " ");


$assunto = substr($arrray[12], strpos($arrray[12],"Assunto:")+9);
$assunto = strtr($assunto, '"', " ");

$problema = substr($arrray[13], strpos($arrray[13],"Problema:") +11);
$problema = strtr($problema, '"', " ");
// $problema = strtr($problema, '"', " ");
$problema = strtr($problema, ']', " ");
$problema = strtr($problema, '}', " ");




include('conexao.php');

// // # Executa a query desejada 
$sql = "INSERT INTO contato(nome,profissao,cpf,rg,email,telefone,cep,bairro,complemento,rua,estado,cidade,assunto,problema,resposta) VALUES ('$nome','$profissao','$cpf','$rg','$email','$telefone','$cep','$bairro','$complemento','$rua','$estado','$cidade','$assunto','$problema',1)";



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

