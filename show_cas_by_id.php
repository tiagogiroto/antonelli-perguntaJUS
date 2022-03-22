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
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js" type="text/javascript"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
  <title>Relatórios</title>
</head>
<body>
    
</body>
</html>


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

@media only screen and (max-width: 600px) {

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

$id = substr($arrray[0], strpos($arrray[0],"id:")+ 40);
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
          $tabela .= '<h1><strong>'.$row['nome'].'</strong></h1>'; 
          $tabela .= '<span class="linha"> Profissão :'.$row['profissao'].'</span>'; 
          $tabela .= '<span class="linha">CPF :'.$row['cpf'].'</span>'; 
          $tabela .= '<span class="linha">RG : '.$row['rg'].'</span>'; 
          $tabela .= '<span class="linha"> Email :'.$row['email'].'</span>'; 
          $tabela .= '<span class="linha"> Telefone :'.$row['telefone'].'</span>'; 
          $tabela .= '<span class="linha"> CEP :'.$row['cep'].'</span>'; 
          $tabela .= '<span class="linha"> Bairro : '.$row['bairro'].', Complemento: '.$row['complemento'].', Rua :'.$row['rua'].'</span>'; 
          $tabela .= '<span class="linha">Estado :'.$row['estado'].' Cidade :'.$row['cidade'].'</span>'; 
          $tabela .= '</br>'; 
          $tabela .= '<span class="linha">  Assunto :'.$row['assunto'].'</span>'; 
          $tabela .= '<span class="linha"> Problema<p>'.$row['problema'].'</p></span>'; 
        
        }
    
        // $tabela .= '</tr>';
        $tabela .= '</div>';
        $tabela .= '<button>Enviar Email</button>'; 
    
      echo $tabela;
      
    // entrar em contato via whatsapp 
    
    }
?>


<script>


</script>