<?php
include('verifica_login.php');
?>

<?php
$URI = urldecode($_SERVER['REQUEST_URI']);
$whatIWant = substr($URI, strpos($URI, ':[{') + 3);
$arrray = explode('","', $whatIWant);

$id = substr($arrray[0], strpos($arrray[0], "Id_associado:") + 15);
$id = strtr($id, '"', " ");
$id = trim($id);


$id_caso = substr($arrray[1], strpos($arrray[1], "id_caso:") + 9);
$id_caso = strtr($id_caso, '"', " ");
$id_caso = strtr($id_caso, ']', " ");
$id_caso = strtr($id_caso, '}', " ");
$id_caso = strtr($id_caso, ' ', "");
$id_caso = trim($id_caso);

$sql_search_login = "select * from associados where associado_id like $id";

$result = $conn->query($sql_search_login);

if ($row = $result->fetch_assoc()) {
    $id_login = $row['id_login'];

    $sql_take_login = "select * from login where id_login like $id_login";

    $result_login = $conn->query($sql_take_login);

    if ($row_login = $result_login->fetch_assoc()) {
        $resposta = $row_login['id_login'];


        $sql_alter_contato_resposta = 'UPDATE contato SET resposta = ' . $resposta . ' WHERE id_contato = ' . $id_caso . '';
        //executar

        
        if ($conn->query($sql_alter_contato_resposta)) {

            echo "  <!DOCTYPE html> ";
            echo "  <html lang='en'> ";
            echo "<head>";
            echo "<meta charset='UTF-8'>";
            echo "<meta http-equiv='X-UA-Compatible' content='IE=edge'> ";
            echo " <meta name='viewport' content='width=device-width, initial-scale=1.0'> ";
            echo " <link href='https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css' rel='stylesheet' integrity='sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3' crossorigin='anonymous'> ";
            echo " <title>Pergunta JUS</title> ";
            echo " </head> ";
            echo "<body>";
            echo "<div class='card' style='width: 40rem; margin: 0 auto; float: none; margin-bottom: 10px; margin-top: 10%;'>";
            echo "<h1 style='text-align: center;' >Associado vinculado ao caso com sucesso !</h1>";
            echo " <div class=''> ";
            echo " <img style='width:10vw; height: auto;' class='mx-auto d-block' src='/v.png'> ";
            echo " </div>";
            // echo " <h3 style='text-align: center;'>Aguarde novas instruções via email ou telefone.</>";
            echo "</div>";
            echo "<div class='col text-center'>";
            echo "<button class='btn btn-primary' onClick='goTo()'>Ir para relatorios</button>";
            echo "</div>";
            echo "</body>";
            echo "</html>";
        } else {
            echo "Error: " . $sql . "<br>" . $conn->error;
        }
    }
}


?>

<script>
    function goTo(){
        window.location.href = 'showDataFile.php';
    }
</script>

