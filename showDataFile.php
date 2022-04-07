<?php
include('verifica_login.php');
?>
<div>
    <a class="voltar" href="pagina_inicial.php">Voltar</a>
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
  .id-login {
    margin-left: 93%;

  }

  .nome-login {
    font-size: 13px;
  }

  .sair {
    font-size: 15px;
  }

  .associado-option {
    text-align: center;
    padding: 20px;
  }

  .associado-btn {
    padding: 10px;
  }

  .titulo-opt {
    font-size: 20px;
  }

  #select-cidade,
  #select-estado {
    margin: 20px;
  }


  @media only screen and (max-width: 600px) {
    .id-login {
      margin: 25px !important;
      text-align: center !important;
    }

    .boxRelatorios {
      width: 90% !important;
      margin-left: 18px !important;
    }

  }
</style>



<?php

$URI = urldecode($_SERVER['REQUEST_URI']);

$whatIWant = substr($URI, strpos($URI, '/') + 14);


$arrray = explode(",", $whatIWant);

$lista = $arrray;
$lista = substr($arrray[0], strpos($arrray[0], "") + 4);


$sqlContatos =
  ' SELECT id_contato,nome,profissao,assunto 
    FROM contato where resposta = 1';

$result = $conn->query($sqlContatos);


if ($_SESSION['autorizacao'] == 2 || $_SESSION['autorizacao'] == 1) {

  if ($result->num_rows > 0) {

    $tabela = "<h2 style='text-align: center;'> Contatos Efetuados </h2>";
    $tabela .= '<br>';
    $tabela .= '<table border="1" class="table table-bordered ">';
    $tabela .= '<thead>';
    $tabela .= '<tr>';
    $tabela .= '<th scope="col">ID</th>';
    $tabela .= '<th scope="col">Nome</th>';
    $tabela .= '<th scope="col">Profissão</th>';
    $tabela .= '<th scope="col">Assunto</th>';

    while ($row = $result->fetch_assoc()) {

      $tabela .= '<tr>';
      $tabela .= '<td scope="row" id="id_contato">' . $row['id_contato'] . '</td>';
      $tabela .= '<td>' . $row['nome'] . '</td>';
      $tabela .= '<td>' . $row['profissao'] . '</td>';
      $tabela .= '<td>' . $row['assunto'] . '</td>';
      $tabela .= '<td><button class="take-id btn btn-primary" onclick="visualizacao_completa()">Expandir</button></td>';
    }

    $tabela .= '</tr>';
    $tabela .= '</table>';


    echo $tabela;
  }
}

if ($_SESSION['autorizacao'] == 3) {

  $session_name = $_SESSION['login'];

  $sql_take_login = "select * from login where login like '$session_name'";
  $result = $conn->query($sql_take_login);

  if ($row = $result->fetch_assoc()) {

    $id_resposta = $row['id_login'];

    $sql_search_cause = "select * from contato where resposta like $id_resposta";

    $result_resposta = $conn->query($sql_search_cause);

    if ($result_resposta->num_rows > 0) {

      $tabela_resposta = "<h2 style='text-align: center;'> Contatos Efetuados </h2>";
      $tabela_resposta .= '<br>';
      $tabela_resposta .= '<table border="1" class="table table-bordered ">';
      $tabela_resposta .= '<thead>';
      $tabela_resposta .= '<tr>';
      $tabela_resposta .= '<th scope="col">ID</th>';
      $tabela_resposta .= '<th scope="col">Nome</th>';
      $tabela_resposta .= '<th scope="col">Profissão</th>';
      $tabela_resposta .= '<th scope="col">Assunto</th>';

      while ($row_resposta = $result_resposta->fetch_assoc()) {

        $tabela_resposta .= '<tr>';
        $tabela_resposta .= '<td scope="row_resposta" id="id_contato">' . $row_resposta['id_contato'] . '</td>';
        $tabela_resposta .= '<td>' . $row_resposta['nome'] . '</td>';
        $tabela_resposta .= '<td>' . $row_resposta['profissao'] . '</td>';
        $tabela_resposta .= '<td>' . $row_resposta['assunto'] . '</td>';
        $tabela_resposta .= '<td><button class="take-id btn btn-primary" onclick="visualizacao_completa()">Expandir</button></td>';
      }

      $tabela_resposta .= '</tr>';
      $tabela_resposta .= '</table>';


      echo $tabela_resposta;
    }
  }
}



?>


<script>
  function option_associado() {
    let a = document.querySelector('.select:checked').value;

    // console.log(typeof(a))

    if (a === '1') {
      //cidade

      var obj = {
        dataSend: []
      }
      obj.dataSend.push({
        ID: a
      })


      var json = JSON.stringify(obj);

      window.location.href = "send_email_to_city.php?" + json;


    } else if (a === '2') {
      //estado

      var obj = {
        dataSend: []
      }
      obj.dataSend.push({
        ID: a
      })

      var json = JSON.stringify(obj);

      window.location.href = "send_email_to_state.php?" + json;


    }

  }

  $(".select-id").click(function() {

    var $row = $(this).closest("tr"); // Find the row
    var $tds = $row.find("td:nth-child(2)");
    $.each($tds, function() {

      var id_linha = $(this).text();
      console.log(id_linha);
    })


  })

  $(".take-id").click(function() {
    var $row = $(this).closest("tr"); // Find the row
    var $tds = $row.find("td:nth-child(1)");
    $.each($tds, function() {
      var id_linha = $(this).text();


      var obj = {
        dataSend: []
      }
      obj.dataSend.push({
        ID: id_linha
      })

      var json = JSON.stringify(obj);

      window.location.href = "show_cas_by_id.php?" + json;

    });

  });
</script>