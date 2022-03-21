<?php
    include('verifica_login.php');
?>


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
    <title>Bem-vindo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>
<body class="background-img body-color">
    <div class="container ">
        <div class="row align-items-start">
            <div class="card" >
                <h1>Bem - vindo </h1>

                <!-- <h2>Escolha a opção desejada !</h2> -->

                <div>
                    <div class="row">
                        <div class="col-sm-12 text-center">
                            <!-- <button class="btn btn-primary" type="button" onclick="goToLogin()">Sou Revendedor</button>
                            <button class="btn btn-primary" type="button" onclick="goToCad()">Quero ser revendedor</button> -->
                            <button class="btn btn-primary" type="button" onclick="goToRel()">Relatórios</button>
                            <!-- <button class="btn btn-primary" type="button" onclick="goToCadLojista()">Cadastro de Lojista</button>
                            <button class="btn btn-primary" type="button" onclick="VerRelatorioLojista()">Ver Relatorio Lojista</button>
                            <button class="btn btn-primary" type="button" onclick="FazerRelatorioLojista()">Atualizar Contato com lojista</button> -->
                        </div>    
                      </div>
                </div>
            </div>
        </div>
    </div>


<script>

    
    function goToRel(){
        location.href="./showDataFile.php";
    }

</script>

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
.background-img{
    /* background: url("image.jpg") no-repeat center center fixed; */
    background-size: 100% 100%;
}

h1{
    text-align: center;
}
h2{
    text-align: center;
}
.btn{
    width: 25%;
    height: 100px;
    display: inline-block;
    vertical-align: top;
    margin-bottom: 10px;
}
.container {   
        z-index: 9999;
        margin: 0 auto; 
        float: none; 
        margin-bottom: 10px; 
        margin-top: 15%;

    }
.card{
    box-shadow: 10px 5px 5px black;
    border-radius: 35px;
}

.container{
        margin-top: 30vh ;
        margin-left: 15vw;
    }

@media only screen and (max-width: 600px) {
    body {
      background-color: lightblue;
    }
    .container{
         margin-top: -15vh !important;
        margin-left: -3vw !important;
        padding-top: 55% !important;
        padding-left: 13% !important; 
    }
    .card{
        margin-top: -75px;
        width: 90% !important;
        border-radius: 50px;
    }
    .background-img{
        background: url("image.jpg") no-repeat center center fixed;
        background-size: 215% 100%;
    }
    h1{
        font-size: 20px;
    }
    h2{
        font-size: 16px;
    }
    .btn{
        width: 45%;
        height: 130px;
        display: inline-block;
        vertical-align: top;
        margin-bottom: 10px;
        background-color: #666666 !important;
        font-size: 16px;
        border-radius: 35px;
        display: table-caption;
        background-color: darkblue;
        box-shadow: 5px 10px 8px #888888;
    }
    .id-login {
        margin: 25px !important;
    }
}
</style>


