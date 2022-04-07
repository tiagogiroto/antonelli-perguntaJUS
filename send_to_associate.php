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
    </head>
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
</style>

<?php
$URI = urldecode($_SERVER['REQUEST_URI']);
$whatIWant = substr($URI, strpos($URI, ':[{') + 3);
$arrray = explode('","', $whatIWant);

$id_caso = substr($arrray[0], strpos($arrray[0], "Id_associado:") + 5);
$id_caso = strtr($id_caso, '"', " ");


$local = substr($arrray[1], strpos($arrray[1], "Local:") + 8);
$local = strtr($local, '"', " ");
$local = strtr($local, ']', " ");
$local = strtr($local, '}', " ");
$local = strtr($local, ' ', "");



    if(strlen(trim($local)) > 2)
    {
        $sql_buscar_associado = "select * from associados where cidade like '%".trim($local)."%'";

        $result_contato = $conn->query($sql_buscar_associado);
        
    
        if ($result_contato->num_rows > 0) {
    
            $tabela = "<span id='id-caso-contato' class='id-caso-contato' style='display:none;'>$id_caso</span>";
            $tabela .= "<h2 style='text-align: center;'> Contatos Efetuados </h2>" ;
            $tabela .= '<br>';
            $tabela .= '<table border="1" class="table table-bordered ">';
            $tabela .='<thead>';
            $tabela .= '<tr>';
            $tabela .= '<th scope="col">Associado</th>'; 
            $tabela .= '<th scope="col">Estado</th>'; 
            $tabela .= '<th scope="col">Cidade</th>'; 
    
    
            while($row = $result_contato->fetch_assoc()) {
               
                $tabela .= '<tr>'; 
                $tabela .= '<td>'.$row['nome'].'</td>'; 
                $tabela .= '<td>'.$row['estado'].'</td>'; 
                $tabela .= '<td>'.$row['cidade'].'</td>'; 
                $tabela .='<td style="display: none;"><span id="id">'.$row['associado_id'].'</span></td>';
                $tabela .='<td><button class="btn btn-primary take-id" onclick="">Vincular</button>  ';
            }
    
            $tabela .= '</tr>';
            $tabela .= '</table>';
    
            echo $tabela;
      
        }
    }

    else if (strlen(trim($local)) == 2)
        {
        $sql_buscar_associado = "select * from associados where estado like '%".trim($local)."%'";


        $result_contato = $conn->query($sql_buscar_associado);
        
    
        if ($result_contato->num_rows > 0) {
    
            $tabela = "<span id='id-caso-contato' class='id-caso-contato' style='display:none;'>$id_caso</span>";
            $tabela .= "<h2 style='text-align: center;'> Contatos Efetuados </h2>" ;
            $tabela .= '<br>';
            $tabela .= '<table border="1" class="table table-bordered ">';
            $tabela .='<thead>';
            $tabela .= '<tr>';
            $tabela .= '<th scope="col">Associado</th>'; 
            $tabela .= '<th scope="col">Estado</th>'; 
            $tabela .= '<th scope="col">Cidade</th>'; 
    
    
            while($row = $result_contato->fetch_assoc()) {
               
                $tabela .= '<tr>'; 
                $tabela .= '<td>'.$row['nome'].'</td>'; 
                $tabela .= '<td>'.$row['estado'].'</td>'; 
                $tabela .= '<td>'.$row['cidade'].'</td>'; 
                $tabela .='<td style="display: none;"><span id="id" >'.$row['associado_id'].'</span></td>';
                $tabela .='<td><button class="btn btn-primary take-id" onclick="">Vincular</button>  ';
            }
    
            $tabela .= '</tr>';
            $tabela .= '</table>';
    
            echo $tabela;
      
        }
    }
    else {
        
        $sql_buscar_associado = "select * from associados";

        $result_contato = $conn->query($sql_buscar_associado);
        
    
        if ($result_contato->num_rows > 0) {
    
             $tabela = "<span id='id-caso-contato' class='id-caso' style='display:none;'>$id_caso</span>";
            $tabela .= "<h2 style='text-align: center;'> Contatos Efetuados </h2>" ;
            $tabela .= '<br>';
            $tabela .= '<table border="1" class="table table-bordered ">';
            $tabela .='<thead>';
            $tabela .= '<tr>';
            $tabela .= '<th scope="col">Associado</th>'; 
            $tabela .= '<th scope="col">Estado</th>'; 
            $tabela .= '<th scope="col">Cidade</th>'; 
    
    
            while($row = $result_contato->fetch_assoc()) {
               
                $tabela .= '<tr>'; 
                $tabela .= '<td>'.$row['nome'].'</td>'; 
                $tabela .= '<td>'.$row['estado'].'</td>'; 
                $tabela .= '<td>'.$row['cidade'].'</td>'; 
               $tabela .='<td style="display: none;"><span id="id" >'.$row['associado_id'].'</span></td>';
                $tabela .='<td><button class="btn btn-primary take-id" onclick="">Vincular</button>  ';
            }
    
            $tabela .= '</tr>';
            $tabela .= '</table>';
    
            echo $tabela;
      
        }
    }
   


?>

<script>

   $(".take-id").click(function() {
        var $row = $(this).closest("tr"); 
        var $tds = $row.find("td:nth-child(4)");
        
        var id_caso_contato = $('#id-caso-contato').text();
        
        

        $.each($tds, function() {     
        var id_linha = $(this).text();

        
        var obj = {
        dataSend: []
        }
        obj.dataSend.push({
            Id_associado: id_linha,
            id_Caso: id_caso_contato    
        })

        var json = JSON.stringify(obj);
        
        console.log(json)

        window.location.href = "receive_associate_case.php?" + json;
        
        })
    })
</script>