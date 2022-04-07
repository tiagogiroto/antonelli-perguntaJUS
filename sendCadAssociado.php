<?php
    include('verifica_login.php');
?>

<?php
$URI = urldecode($_SERVER['REQUEST_URI']);
$whatIWant = substr($URI, strpos($URI, ':[{') + 3);
$arrray = explode('","', $whatIWant);


$nome = substr($arrray[0], strpos($arrray[0],"Nome:")+7);
$nome = strtr($nome, '"', " ");

$oab = substr($arrray[1], strpos($arrray[1],"OAB:")+5);
$oab = strtr($oab, '"', " ");


$email = substr($arrray[2], strpos($arrray[2],"Email:")+7);
$email = strtr($email, '"', " ");


$cidade = substr($arrray[3], strpos($arrray[3],"Cidade:")+8);
$cidade = strtr($cidade, '"', " ");


$estado = substr($arrray[4], strpos($arrray[4],"Estado:")+8);
$estado = strtr($estado, '"', " ");
$estado = strtr($estado, '"', " ");
$estado = strtr($estado, ']', " ");
$estado = strtr($estado, '}', " ");
$estado = trim($estado);



    $sqlInsert = "insert into associados (nome, oab, email, cidade, estado) values ('$nome','$oab','$email','$cidade','$estado');";

    
    if ($conn->query($sqlInsert) === TRUE) {
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
        echo "<h1 style='text-align: center;' >Associado cadastrado ao sistema !</h1>";
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

create table associados(
	associado_id int not null auto_increment primary key,
    nome varchar (50) not null,
    oab varchar (20) not null,
    email varchar (60) not null,
    cidade varchar (25) not null,
    estado varchar (2) not null
);

create table log_envio_associados(
	log_env_id  int not null auto_increment primary key,
    log varchar (80),
    id_contatos_enviados varchar(80)
);



 insert into associados (nome, oab, email, cidade, estado) values ('','','','','');
insert into associados (nome, oab, email, cidade, estado) values (' Tiago Neto',' 3423342134',' masterkills565@gmail.com',' Londrina',' PR ');

select * from associados;