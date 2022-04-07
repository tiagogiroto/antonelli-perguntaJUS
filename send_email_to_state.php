<?php
    include('verifica_login.php');
?>


<?php
$URI = urldecode($_SERVER['REQUEST_URI']);
$whatIWant = substr($URI, strpos($URI, ':[{') + 3);
$arrray = explode('","', $whatIWant);


$id = substr($arrray[0], strpos($arrray[0], "Id:") + 5);
$id = strtr($id, '"', " ");
$id = strtr($id, ']', " ");
$id = strtr($id, '}', " ");


    $sql_buscar_contato_por_estado = "select id_contato, nome, estado ,email from contato where resposta = 1";

    $sql_buscar_associado_por_estado = "select associado_id,nome, email, estado from associados";

    $result_contato = $conn->query($sql_buscar_contato_por_estado);


    if ($result_contato->num_rows > 0) {
        while($row = $result_contato->fetch_assoc()) {
           
            echo $row['nome'];
            echo " ";
            echo $row['email'];
            echo " ";
            echo $row['estado'];
            echo '<br>';

            

        }
    }





?>