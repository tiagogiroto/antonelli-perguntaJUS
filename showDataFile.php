


<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
  <title>Relatórios</title>
</head>
<body>
    
</body>
</html>


<!-- <div>
    <a class="voltar" href="javascript:history.back()">Voltar</a>
    <div class="id-login">
        <h2 class="nome-login">Ola, 
          php echo $_SESSION['login']; 
        </h2>
        <h2 class="sair"><a href='logout.php'>SAIR</a></h2>
    </div>
</div> -->

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

$whatIWant = substr($URI, strpos($URI, '/')+14);    


$arrray = explode(",", $whatIWant);

$lista = $arrray;
$lista = substr($arrray[0], strpos($arrray[0],"")+4);

// $lista = substr($arrray[0], strpos($arrray[0],"")+7);


// switch($lista){
//   case 1:
//     revendedor();
//     break;
//   case 2:
//       lojista();
//     break;

//   default;
//   }



  include('conexao.php');

    $sqlContatos = 
    ' SELECT id_contato,nome,profissao,cpf,rg,email,telefone,cep,bairro,complemento,rua,estado,cidade,assunto,problema 
    FROM contato where resposta = 1';

    $result = $conn->query($sqlContatos);

    
  if ($result->num_rows > 0) {

    $tabela = "<h2 style='text-align: center;'> Contatos Efetuados </h2>" ;
    $tabela .= '<br>';
    $tabela .= '<table border="1" class="table table-bordered">';
    $tabela .='<thead>';
    $tabela .= '<tr>';
    $tabela .= '<th scope="col">ID</th>';
    $tabela .= '<th scope="col">Nome</th>'; 
    $tabela .= '<th scope="col">Profissão</th>'; 
    $tabela .= '<th scope="col">CPF</th>'; 
    $tabela .= '<th scope="col">RG</th>'; 
    $tabela .= '<th scope="col">Email</th>'; 
    $tabela .= '<th scope="col">Telefone</th>'; 
    $tabela .= '<th scope="col">CEP</th>'; 
    $tabela .= '<th scope="col">Bairro</th>'; 
    $tabela .= '<th scope="col">Complemento</th>';
    $tabela .= '<th scope="col">Rua</th>';
    $tabela .= '<th scope="col">Estado</th>';
    $tabela .= '<th scope="col">Cidade</th>';
    $tabela .= '<th scope="col">Assunto</th>';
    $tabela .= '<th scope="col">Problema</th>';
    
  
    

    while($row = $result->fetch_assoc()) {

      $tabela .= '<tr>'; 
      $tabela .= '<td scope="row">'.$row['id_contato'].'</td>';
      $tabela .= '<td>'.$row['nome'].'</td>'; 
      $tabela .= '<td>'.$row['profissao'].'</td>'; 
      $tabela .= '<td>'.$row['cpf'].'</td>'; 
      $tabela .= '<td>'.$row['rg'].'</td>'; 
      $tabela .= '<td>'.$row['email'].'</td>'; 
      $tabela .= '<td>'.$row['telefone'].'</td>'; 
      $tabela .= '<td>'.$row['cep'].'</td>'; 
      $tabela .= '<td>'.$row['bairro'].'</td>'; 
      $tabela .= '<td>'.$row['complemento'].'</td>'; 
      $tabela .= '<td>'.$row['rua'].'</td>';
      $tabela .= '<td>'.$row['estado'].'</td>'; 
      $tabela .= '<td>'.$row['cidade'].'</td>'; 
      $tabela .= '<td>'.$row['assunto'].'</td>'; 
      $tabela .= '<td><p>'.$row['problema'].'</p></td>'; 

    
    }

    $tabela .= '</tr>';
    $tabela .= '</table>';


  echo $tabela;
  

}

?>

<div class="card" style="width:40vh;">
  <input class="form-control" id="id" name='id' type='text' data-mask-selectonfocus="true" style="width: 100%;" placeholder="Insira o id respondido">
  <button class="btn btn-primary" onClick="confirmar_resposta()">Confirmar</button>
</div>

<script>
  function confirmar_resposta(){
    var id = document.getElementById("id").value;

    console.log(id)

    var obj = {
      dataSend: []
    }
    obj.dataSend.push({
      ID: id
    })

    var json = JSON.stringify(obj);

    console.log(json)

    window.location.href= "response_contact.php?" + json;

  }
</script>