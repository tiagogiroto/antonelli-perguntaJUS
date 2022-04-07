<?php
    include('verifica_login.php');
?>

<div>
    <a class="voltar" href="javascript:history.back()">Voltar</a>
</div>

<div class="id-login">
    <h2 class="nome-login">Ola, <?php echo $_SESSION['login']; ?></h2>
    <h2 class="sair"><a href='logout.php'>SAIR</a></h2>
</div>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.4/js/bootstrap.min.js"></script>
  <link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.4/css/bootstrap.min.css" rel="stylesheet"/>

<!-- Modal -->
<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content box-email">
      <div class="">  
        <h1 class="titulo-resposta"><strong>Email</strong></h1>
          <div class="row content">
            <input placeholder="Assunto" id="assunto" class="assunto"/> 
            <textarea  placeholder="Conteúdo" id="conteudo" cols="80" rows="5" class="conteudo"></textarea >
          </div>  
        <button class="btn btn-primary" onClick="resposta_email()">Enviar</button>
        </div>
      </div>
  </div>
</div>

<div class="modal fade" id="myModalWpp" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content box-email">
      <div class="">  
        <h1 class="titulo-resposta"><strong>Mensagem WhatsApp</strong></h1>
          <div class="row content">
          </div>  
        </div>
      </div>
  </div>
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

  .folha {
    width:60%;
    height:auto;
    overflow:hidden;
    background: #fdfdfd;
    float:none;
    margin:auto;
    padding:35px;
  }
  .folha h1 {
      padding: 10px;
      padding-bottom: 10px;
      font-family: 'open_sansregular';
      font-size: 1.7em;
      border: 2px #d2d2d2 dotted;
      padding-bottom: 10px;
      margin-bottom: 30px;
      margin-top: 70px;
      text-align: center;
  }
  .folha h1 strong {   font-family:'open_sansbold'; } 
  .folha p {
    padding: 10px 20px;
    font-family:'open_sansregular';
    font-size:1em;
    color: #4b4b4b;
  }
  .folha .linha { 
      width: 100%;
      float: left;
      margin-bottom: 0.7em;
      text-decoration: none;
      color: #888;
      border-bottom: 1px #c8e0fd solid;
      padding-bottom: 0.3em;
  }
  .folha .linha:hover { color:#000000; }
  .dobra {
    position: relative;
    -webkit-box-shadow: 5px 5px 5px rgba(0,0,0,0.8);
    -moz-box-shadow: 5px 5px 5px rgba(0,0,0,0.8);
    box-shadow: 5px 5px 5px rgba(0,0,0,0.8);
  }
  .dobra:before {
    content: "";
    position: absolute;
    top: 0%;
    left: 0%;
    width: 0px;
    height: 0px;
    border-bottom: 70px solid #f4f4f4;
    border-left: 70px solid #393939;
    -webkit-box-shadow: 5px 5px 8px rgba(64, 64, 64, 0.5);
    -moz-box-shadow: 5px 5px 8px rgba(64, 64, 64, 0.5);
    box-shadow: 5px 5px 8px rgba(64, 64, 64, 0.5);
  }
  .card{
    -webkit-box-shadow: 5px 5px 5px rgb(0 0 0 / 80%);
    -moz-box-shadow: 5px 5px 5px rgba(0,0,0,0.8);
  }
  .box-email{
    width: 100%;
    height: auto;
    overflow: hidden;
    background: #fdfdfd;
    float: none;
    margin: auto;
    padding: 35px;
  }
  .assunto{
    border-radius: 25px;
    max-width: 100%;
    padding: 5px;
    margin: 25px;
    width: 100%;
  }
  .conteudo{
    width: 100%;
    max-width: 100%;
    border-radius: 25px;
    margin: 25px;
    padding: 15px;
  }
  .titulo-resposta{
    text-align: center;
    font-size: 25px;
    padding: 20px;
  }
  .content{
    width: 80%;
    margin: 6%;
  }
  .btn{
    width: 80%;
    margin-bottom: 10%;
    margin-left: 10%;
  }
  .campos-resposta{
    text-align: center;
  }
  .resposta, .respostaWpp, .respostaAsc{
    margin: 30px;
    margin-top: 25px;
    display: inline-block;
    line-height: 2.2em;
    padding: 10px 4.62em;
    border: 1px solid #666;
    border-radius: 0.25em;
    background-image: linear-gradient( to bottom, #fff, #ccc );
    box-shadow: inset 0 0 0.1em #fff, 0.2em 0.2em 0.2em rgb(0 0 0 / 30%);
    font-family: arial, sans-serif;
    font-size: 0.8em;
  }
  .linha-btn{
    text-align: center !important;
  }

  @media only screen and (max-width: 600px) {

    .respostaWpp{
      background-image: url('wpp.png');
      background-repeat: no-repeat;
      background-size: 18% auto;
      background-position: right;
      background-color: #ddd;
    }
    .resposta{
      background-image: url(email.png);
      background-repeat: no-repeat;
      background-size: 15% 45%;
      background-position: right;
      background-color: #ddd;
    }
      .folha{
        width: 95% !important;
      }
      .id-login {
          margin-left: 0% !important;
          margin-top: -20px !important;
          margin-bottom: 20px !important;
          text-align: center !important;
      }
      .boxRelatorios{
          width: 90% !important;
          margin-left: 18px !important;
      }

  }

</style>


<?php


$URI = urldecode($_SERVER['REQUEST_URI']);
$whatIWant = substr($URI, strpos($URI, '/'));    
$arrray = explode(",", $whatIWant);

$id = substr($arrray[0], strpos($arrray[0],"id:")+ 51);
$id = strtr($id, '"', " ");
$id = strtr($id, ']', " ");
$id = strtr($id, '}', " ");


// echo $id;


    $sqlContato_por_id = 
        ' SELECT nome,profissao,cpf,rg,email,telefone,cep,bairro,complemento,rua,estado,cidade,assunto,problema 
        FROM contato where id_contato = '.$id.'';

    $result = $conn->query($sqlContato_por_id);

    if ($result->num_rows > 0) {
        while($row = $result->fetch_assoc()) {
          $tabela = '<div class="folha dobra" >';
          $tabela .='<span id="id" style="display: none;">'.$id.'</span>';
          $tabela .= '<h1><strong>'.$row['nome'].'</strong></h1>'; 
          $tabela .= '<span class="linha"> Profissão :'.$row['profissao'].'</span>'; 
          $tabela .= '<span class="linha">CPF :'.$row['cpf'].'</span>'; 
          $tabela .= '<span class="linha">RG : '.$row['rg'].'</span>'; 
          $tabela .= '<span class="linha" id="email"> Email :'.$row['email'].'</span>'; 
          $tabela .= '<span class="linha" id="telefone" > Telefone :'.$row['telefone'].'</span>'; 
          $tabela .= '<span class="linha"> CEP :'.$row['cep'].'</span>'; 
          $tabela .= '<span class="linha"> Bairro : '.$row['bairro'].', Complemento: '.$row['complemento'].', Rua :'.$row['rua'].'</span>'; 
          $tabela .= '<span class="linha" id="estado">Estado :'.$row['estado'].' ,Cidade :'.$row['cidade'].'</span>'; 
          $tabela .= '</br>'; 
          $tabela .= '<span class="linha">  Assunto :'.$row['assunto'].'</span>'; 
          $tabela .= '<span class="linha"> Problema<p>'.$row['problema'].'</p></span>'; 

          if($_SESSION['autorizacao'] < 2):
            $tabela .= '<span class="linha linha-btn"><label class="respostaAsc" id="respostaAsc" onclick="enviar_para_associado()">Enviar para associado</label></span>';
          endif;
          
        }

        
        $tabela .= '</div>';
        // $tabela .= '<input type="checkbox" id="test6"/>';
        $tabela .= '<div class="campos-resposta">';
        $tabela .= '<label class="resposta" id="resposta">Responder via Email</label>';
        $tabela .= '<label class="respostaWpp" id="respostaWpp" onclick="resposta_whatsapp()">Responder via Whatsapp</label>';
        $tabela .= '</div>';

      echo $tabela;
      
    // entrar em contato via whatsapp 
    
    }
?>



<script>




function resposta_email(){


  var assunto = document.getElementById('assunto').value;
  var conteudo = document.getElementById('conteudo').value;
  
  var email = $('#email').text();
  var newEmail = email.split(':');
  
  var id = $('#id').text();


  var obj = {
        dataSend: []
      }

    obj.dataSend.push(
      {
        Assunto: assunto,
        Conteudo: conteudo,
        Email: newEmail[1],   
        Id: id
      })

      var json = JSON.stringify(obj);

      window.location.href= "send_email.php?" + json;
}

function resposta_whatsapp(){

  var telefone = $('#telefone').text();
  var newTelefone = telefone.split(':');

  resposta_Wpp(newTelefone[1])
  
  
}

async function resposta_Wpp(tel){

  window.open("https://api.whatsapp.com/send?phone=55"+ tel + "&amp;text=",'_blank');

}

function send_msg_wpp(){

  var id = $('#id').text();


  var obj = 
    {
      dataSend: []
    }

    obj.dataSend.push(
      {
        Id: id
      })

      var json = JSON.stringify(obj);

 
    window.location.href= "send_wpp.php?" + json;


}

function enviar_para_associado(){

  var id = $('#id').text();
  var estado = $('#estado').text();
  var newEstado= estado.split(':');
  var estadoEnvio = newEstado[1].split(',');


  var obj = 
    {
      dataSend: []
    }

    obj.dataSend.push(
      {
        Id: id,
        Estado: estadoEnvio[0],
        Cidade: newEstado[2]

      })

      var json = JSON.stringify(obj);

      console.log(json)
      window.location.href= "verify_send_associate.php?" + json;

}

$(".resposta").click(function () {
   $('#myModal').modal();
});

$(".respostaWpp").click(function () {
   $('#myModalWpp').modal();
});

$("#myModalWpp").on("hidden.bs.modal", function () {
  // do something…

  var r=confirm("Você respondeu a mensagem ?");

  if (r==true)
  {
    x="You pressed OK!";
    send_msg_wpp();
  }
  else
  {
    x="You pressed Cancel!";
  }

})


</script>