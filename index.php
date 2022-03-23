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


        <div class="all-page">
            
            <div id="div1" class="apresentacao-inicial">
                <div class="menu shadow p-3 mb-5 bg-body rounded">
                    <span id="inicio" class="menu-item">Início</span>
                    <span id="quem-somos" class="menu-item">Quem somos</span>
                    <span id="sobre" class="menu-item">Sobre</span>
                    <span id="contato" class="menu-item">Contato</span>
                </div>
                
                <div class="apresentacao">
                    <p>At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis
                        praesentium voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi</p>
                </div>
            </div>

            <div class="quem-somos">
                <p>At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis
                    praesentium voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi</p>
            </div>

            <div class="como-funciona">
                <p>At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis 
                praesentium voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi</p>
            </div>
                    
            <div class="fale-conosco">
                <button onClick="abrirCadastro()">Ir para Cadastro</button>
               
            </div>
        </div>

        <script>

        function abrirCadastro(){
            window.location.href = "cadastro.php";
        }

        $(document).ready(function (){

            $("#inicio").click(function (){
                var y = $(window).scrollTop();  
                $(window).scrollTop(y+100);
            });

            $("#quem-somos").click(function (){
                var y = $(window).scrollTop();  
                $(window).scrollTop(y+400);
            });

            $("#sobre").click(function (){
                var y = $(window).scrollTop();  
                $(window).scrollTop(y+850);
            });

            $("#contato").click(function (){
                var y = $(window).scrollTop();  
                $(window).scrollTop(y+2000);
            });
        });
        
    </script>


        
    </body>
</html>
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
    width: 25rem !important;
    margin-right: 0px;
    
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
    width: 80%;
    margin-left: 10%;
    height: 75vh;
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
}
</style>