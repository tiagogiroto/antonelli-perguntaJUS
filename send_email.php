<!-- email de resposta a cada formulário de cliente -->
<?php
$URI = urldecode($_SERVER['REQUEST_URI']);
$whatIWant = substr($URI, strpos($URI, ':[{') + 3);    
$arrray = explode('","', $whatIWant);

$assunto = substr($arrray[0], strpos($arrray[0],"Assunto:")+10);
$assunto = strtr($assunto, '"', " ");

$conteudo = substr($arrray[1], strpos($arrray[1],"Conteudo:") +11);
$conteudo = strtr($conteudo, '"', " ");
// $conteudo = strtr($conteudo, '"', " ");
$conteudo = strtr($conteudo, ']', " ");
$conteudo = strtr($conteudo, '}', " ");

$conteudo = str_replace("\\n",' ', $conteudo);


echo $assunto;

echo $conteudo;


    // $conteudo = "teste teste";
   // envia o email
    // O remetente deve ser um e-mail do seu domínio conforme determina a RFC 822.
    // O return-path deve ser ser o mesmo e-mail do remetente.
    
    // contato@perguntejus.com.br
    // contato@pergunte_3124



    //   $headers = "MIME-Version: 1.1\r\n";
    //   $headers .= "Content-type: text/html; charset=UTF-8\r\n";
    //   $headers .= "From: contato@perguntejus.com.br\r\n"; // remetente
    //   $headers .= "Return-Path: contato@perguntejus.com.br\r\n"; // return-path
    //   $envio = mail("masterkills565@gmail.com", "$assunto", $conteudo, $headers);
      
    //   if($envio){
    //     echo "Mensagem enviada com sucesso";
    
    // //   $sqlUpdate = "UPDATE revendedores SET revendedor_cadastrado = 2 ";
      
    //     if ($conn->query($sqlUpdate) === TRUE) {
            
    //       }
    //     }
      
    //   else{
    //     echo "A mensagem nao pode ser enviada";
    //   }




    
    // }

?>


