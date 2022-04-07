
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
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

    </head>
</html>

<style>
    @media only screen and (max-width: 600px) {
        .id-login {
            margin-left: 0% !important;
            margin-bottom: 20px !important;
            text-align: center !important;
        }
        .boxRelatorios{
            width: 90% !important;
            margin-left: 18px !important;
    }
    }
  .id-login{
    margin-left: 93%;

  }
  h6{
      text-align: center;
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



$id_caso = substr($arrray[0], strpos($arrray[0], "Id:") + 5);
$id_caso = strtr($id_caso, '"', " ");



$estado = substr($arrray[1], strpos($arrray[1], "Estado:") + 8);
$estado = strtr($estado, '"', " ");



$cidade = substr($arrray[2], strpos($arrray[2], "Cidade:") + 8);
$cidade = strtr($cidade, '"', " ");
$cidade = strtr($cidade, ']', " ");
$cidade = strtr($cidade, '}', " ");
$cidade = strtr($cidade, ' ', "");


    $tabela = "<span id='id-caso' class='id-caso' style='display:none;'>$id_caso</span>";

    echo $tabela;


?>


<body>
    <form action="" method="post">
        <div class="boxRelatorios row justify-content-center">


            <h6>Buscar associado</h6>

            <p>
                <input type="checkbox" id="cidade" value="on" placeholder="Londrina"> Cidade :
                <input type="text"  placeholder="Londrina" class="cidade" id="cidade-txt">
            </p>

            <p>
                <input type="checkbox" id="estado" value="on" > Estado : 
                <input type="text" placeholder="PR" maxlength="2" class="estado" id="estado-txt">
            </p>
            <p>
                <input type="checkbox" id="all" value="on"> Todos
            </p>


            <input type="button" id="btnSubmit" value="Procurar"/>

          </div>
    </form>
</body>

<script>

    var chkCidade = document.getElementById("cidade");
    var chkEstado = document.getElementById("estado");
    var chkAll = document.getElementById("all");

    document.getElementById("btnSubmit").onclick = function () {
    if (chkCidade.checked) {

        let cidade = document.getElementById("cidade-txt").value;
        var id = $('#id-caso').text();
        
        var obj = 
    {
      dataSend: []
    }

    obj.dataSend.push(
      {
        Id: id,
        Local: cidade

      })


      
      var json = JSON.stringify(obj);
      
      window.location.href = "send_to_associate.php?" + json;

    }
    else if(chkEstado.checked) {
        let estado = document.getElementById("estado-txt").value
        var id = $('#id-caso').text();
        
        var obj = 
    {
      dataSend: []
    }

    obj.dataSend.push(
      {
        Id: id,
        Local: estado,
      })


      
      var json = JSON.stringify(obj);

      window.location.href = "send_to_associate.php?" + json;

    } 

    else if(chkAll.checked){

        var id = $('#id-caso').text();
        
        var obj = 
    {
      dataSend: []
    }

    obj.dataSend.push(
      {
        Id: id,
      })


      
      var json = JSON.stringify(obj);

      window.location.href = "send_to_associate.php?" + json;

    }
};


</script>

<!-- send_to_associate.php -->