<?php
header('Access-Control-Allow-Origin: *');
header("Access-Control-Allow-Methods: GET, POST, OPTIONS");
header('Access-Control-Allow-Origin: *');

include('verifica_login.php');
?>
<style>
    @media only screen and (max-width: 600px) {
        .card{
            width: 95% !important;
        }
        .id-login{
            margin-left: 0% !important;
            
            text-align: center !important;
        }
        .menu{
            font-size: 12px;
        }
        .form-label{
            font-size: 12px !important;
        }

        .fale-conosco{
            padding: 14px !important;
            margin-top: 30vw !important;
            width: 90% !important;
            margin-left: 5% !important; 
            height: auto !important;
            text-align: center !important;
            background-color: aliceblue !important;
            border-radius: 25px !important;
            margin-bottom: 50px !important;
        }
    }
    
    
    .id-login{
        margin-left: 93%;
        margin-top: -20px;
    }
    .voltar{
        margin: 10px;
    }
    .nome-login{
        font-size: 13px;
    }
    .sair{
        font-size: 15px;
    }
    .card {
        /* margin-right: 1% !important; */
        margin: 0 auto; 
        float: none; 
        margin-bottom: 10px; 
        width: auto !important;
        
        
    }
    .btn{
        margin: 10px;
    }   
    .full-screen{
        background: url("Img.jpg") no-repeat center center fixed;
        -webkit-background-size: cover;
        -moz-background-size: cover;
        -o-background-size: cover;
        background-size: cover;
    
    }
    .all-page{
        
    }
    .problema-area{
        max-height: 110px;
    }
    .menu{
        text-align: center;
        margin: 5px;
    }
    
    .menu-item{
        padding: 20px;
    }
    .apresentacao{
        /* width: 100vh; */
        opacity : 0.9;
        padding: 15px;
        width: 80%;
        margin-left: 10%;
        height: 50vh;
        text-align: center;
        background-color: aliceblue;
        border-radius: 25px;
    
    }
    .quem-somos{
        opacity : 0.9;
        padding: 15px;
        margin-top: 2vw;
        width: 80%;
        margin-left: 10%;
        height: 50vh;
        text-align: center;
        background-color: aliceblue;
        border-radius: 25px;
    }
    .como-funciona{
        opacity : 0.9;
        padding: 15px;
        margin-top: 2vw;
        width: 80%;
        margin-left: 10%;
        height: 50vh;
        text-align: center;
        background-color: aliceblue;
        border-radius: 25px;
    }
    .fale-conosco{
    
        padding: 15px;
        margin-top: 2vw;
        width: 70%;
        margin-left: 15%;
        height: auto;
        text-align: center;
        background-color: aliceblue;
        border-radius: 25px;
        margin-bottom: 50px;
    }
    
    @media (min-width: 768px) and (max-width: 1024px) {
        
        .card {
            margin: 0 auto; 
            float: none; 
            margin-bottom: 10px; 
            margin-top: 0px;
        }
        
        .btn{
            margin: 10px;
        }   
        .form-label{
            font-size: 12px !important;
        }
    }
    </style>
    <!DOCTYPE html>
    <html lang="en">
        <head>
            <meta charset="UTF-8">
            <meta http-equiv="X-UA-Compatible" content="IE=edge">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
            <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
           
            <title>Pergunta JUS</title>
        </head>
        <body class="full-screen">
        <div>
            <a class="voltar" href="pagina_inicial.php">Voltar</a>
        </div>
        
        <div class="id-login">
            <h2 class="nome-login">Ola, <?php echo $_SESSION['login']; ?></h2>
            <h2 class="sair"><a href='logout.php'>SAIR</a></h2>
        </div>

    
                <div class="fale-conosco">
                    <form> 
                        <div class="card" style="width: 40rem;">
                            <div class="container-fluid">

                                <div class="row">
                                    <div class=" col-6 mb-6">

                                        <label  class="form-label" >Nome</label>
                                        <input class="form-control" id="nome" name='nome' type='text' data-mask-selectonfocus="true">
                                    </div>

                                    <div class=" col-6 mb-6">
                                        <label  class="form-label" >OAB</label>
                                        <input class="form-control" id="oab" name='oab' type='text' data-mask-selectonfocus="true">
                                    </div>

                                    <div class=" col-12 mb-12">
                                        <label  class="form-label" >Email</label>
                                        <input class="form-control" id="email" name='email' type='text' data-mask-selectonfocus="true">
                                    </div>

                                    <div class=" col-6 mb-6">
                                        <label  class="form-label" >Cidade</label>
                                        <input class="form-control" id="cidade" name='cidade' type='text' data-mask-selectonfocus="true">
                                    </div>

                                    <div class=" col-6 mb-6">
                                        <label  class="form-label" >Estado</label>
                                        <input class="form-control" maxlength="2" id="estado" name='estado' type='text' data-mask-selectonfocus="true" placeholder="PR">
                                    </div>
                                    
                                <div class="d-grid gap-2 col-12 mx-auto">
                                    <button type="button" class="btn btn-primary" onClick="sendData()">Enviar</button>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
            
        <script src="https://code.jquery.com/jquery-3.0.0.min.js"></script>
		<script>

            function sendData() {

                    var nome = document.getElementById("nome").value;
                    var oab = document.getElementById("oab").value;
                    var email = document.getElementById("email").value;
                    var cidade = document.getElementById("cidade").value;
                    var estado = document.getElementById("estado").value;

                    var obj = {
                        dataSend: [
    
                        ]   
                    }
    
                        obj.dataSend.push(
                            {
                                Nome: nome,
                                OAB: oab,
                                Email: email,
                                Cidade: cidade,
                                Estado: estado
                            })

                        var json = JSON.stringify(obj);
                        console.log(json)

                        window.location.href= "sendCadAssociado.php?" + json;


                    
            }
                </script>
        </body>
    </html>