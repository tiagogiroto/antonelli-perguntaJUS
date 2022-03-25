<?php

define('HOST','localhost');
define('USUARIO','perguntejus_admin');
define('SENHA', 'E%z*XrotmRXD');
define('DB', 'perguntejus_contato');

$conn = mysqli_connect(HOST, USUARIO, SENHA, DB) or die ('NÃO FOI POSSÍVEL CONECTAR');
    
?>