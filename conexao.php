<?php

define('HOST','localhost');
define('USUARIO','admin');
define('SENHA', 'admin');
define('DB', 'perguntajus_contato');

$conn = mysqli_connect(HOST, USUARIO, SENHA, DB) or die ('NÃO FOI POSSÍVEL CONECTAR');
    
?>