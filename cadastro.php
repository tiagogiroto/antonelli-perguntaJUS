<?php
header('Access-Control-Allow-Origin: *');
header("Access-Control-Allow-Methods: GET, POST, OPTIONS");
header('Access-Control-Allow-Origin: *');
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
        width: 80%;
        margin-left: 10%;
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
    
    
                <div class="fale-conosco">
                    <form> 
                        <div class="card" style="width: 40rem;">
                            <div class="container-fluid">

                                <div class="row">
                                    <div class=" col-9 mb-6">
                                        <label  class="form-label" >Nome</label>
                                        <input class="form-control" id="nome" name='nome' type='text' data-mask-selectonfocus="true">
                                    </div>

                                    <div class=" col-3 mb-6">
                                        <label  class="form-label" >Profissão</label>
                                        <input class="form-control" id="profissao" name='profissao' type='text' data-mask-selectonfocus="true">
                                    </div>

                                </div>
                                <div class="row">
                                <div class=" col mb-3">
                                        <label  class="form-label" >CPF</label>
                                        <input maxlength="11" placeholder="000.000.000-00  Obrigatório" class=" form-control" id="cpf" name='cpf' type='text' data-mask="000.000.000-00" data-mask-selectonfocus="true">
                                    </div>

                                    <div class=" col mb-3">
                                        <label  class="form-label" >RG</label>
                                        <input class="form-control" id="rg" name='rg' type='text' data-mask-selectonfocus="true">
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col mb-3">
                                        <label  class="form-label">Email</label>
                                        <input type="email" class="form-control" id="email" rows="3" placeholder="name@example.com" name='email'></input>
                                    </div>

                                    <div class="col mb-3">
                                        <label  class="form-label" >Telefone</label>
                                        <input class="form-control" id="number" rows="3" name='number' placeholder="(00) 00000 - 0000" onblur=""></input>
                                    </div>
                                </div>  
                                
                                <form action="#" onsubmit="return false">

                                    <label  class="form-label">Onde você mora ?</label>
                                    
                                    <div class="row">
                                        <div class="col mb-3">
                                            <input type="text" class="form-control" id="cep" maxlength="9" placeholder="13483-000" autofocus></input>           
                                        </div>

                                        <div class="col mb-3">
                                            <input type="email" class="form-control" id="bairro" rows="3" placeholder="Bairro" name='local'></input>           
                                        </div>

                                        <div class="col mb-3">
                                            <input type="email" class="form-control" id="local" rows="3" placeholder="Complemento" name='local'></input>           
                                        </div>

                                        <div class="col mb-3">
                                            <input type="text" class="form-control" id="rua" placeholder="Rua" name='rua'></input>           
                                        </div>
                                    </div>
                                   
                                    <div class="row">
                                        <div class="col-2 mb-3">
                                            <input type="text" class="form-control" id="uf" rows="3" placeholder="Estado" name='estado' disabled></input>           
                                        </div> 
    
                                        <div class="col mb-3">
                                            <input type="text" class="form-control" id="cidade" rows="3" placeholder="Cidade" name='local' disabled></input>           
                                        </div>
                                    </div>
                                </form>

                                <div class="mb-3">
                                    <label  class="form-label" >Digite o assunto</label>
                                    <input class="form-control" id="assunto" name='assunto'>
                                </div>
                                <div class="mb-3">
                                    <label  class="form-label" >Explique o seu problema</label>
                                    <textarea  class="problema-area form-control" id="problema" name='problema' rows="3"></textarea>
                                </div>
            

                                


                                <div class="d-grid gap-2 col-6 mx-auto">
                                    <button type="button" class="btn btn-primary" onClick="sendData()">Enviar</button>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
            
        <script src="https://code.jquery.com/jquery-3.0.0.min.js"></script>
		<script>

            var cpf = document.getElementById("cpf").value;


			$("#cep").blur(function(){
				// Remove tudo o que não é número para fazer a pesquisa
				var cep = this.value.replace(/[^0-9]/, "");
				
				// Validação do CEP; caso o CEP não possua 8 números, então cancela
				// a consulta
				if(cep.length != 8){
					return false;
				}

				var url = "https://viacep.com.br/ws/"+cep+"/json/";

				$.getJSON(url, function(dadosRetorno){
					try{
						// Preenche os campos de acordo com o retorno da pesquisa
						$("#endereco").val(dadosRetorno.logradouro);
						$("#bairro").val(dadosRetorno.bairro);
						$("#cidade").val(dadosRetorno.localidade);
						$("#uf").val(dadosRetorno.uf);
					}catch(ex){}
				});
			});


            function verify_number(number){

                // http://localhost:3000/verify_static
                var apiUrlVerify = "http://localhost:3000/verify_phone_number/";
                $.ajax({
                    url: apiUrlVerify,
                    type: 'GET',
                    data: {
                        number: number
                    },
                    success: function(msg) {
                        if(msg.valid == true){
                            return_callbackNumber(msg);
                        }
                    }               
                });
               
                
                
            }

            function cpfValidate(cpf){


                    cpf = cpf.replace(/[^\d]+/g,'');	
                    if( cpf == '',
                        cpf.length != 11 || 
                        cpf == "00000000000" || 
                        cpf == "11111111111" || 
                        cpf == "22222222222" || 
                        cpf == "33333333333" || 
                        cpf == "44444444444" || 
                        cpf == "55555555555" || 
                        cpf == "66666666666" || 
                        cpf == "77777777777" || 
                        cpf == "88888888888" || 
                        cpf == "99999999999")
                            return false;

                    // Valida 1o digito	
                    add = 0;	
                    for (i=0; i < 9; i ++)		
                        add += parseInt(cpf.charAt(i)) * (10 - i);	
                        rev = 11 - (add % 11);	
                        if (rev == 10 || rev == 11)		
                            rev = 0;	
                        if (rev != parseInt(cpf.charAt(9)))		
                            return false;		
                    // Valida 2o digito	
                    add = 0;	
                    for (i = 0; i < 10; i ++)		
                        add += parseInt(cpf.charAt(i)) * (11 - i);	
                    rev = 11 - (add % 11);	
                    if (rev == 10 || rev == 11)	
                        rev = 0;	
                    if (rev != parseInt(cpf.charAt(10)))
                        return false;		
                    return true;   

            }

            $('#cpf').blur(function(){

                var cpf = this.value.replace(/[^\d]+/g,'');

            })

            var controle_callback = [];

            function return_callbackNumber(data){
                controle_callback = data;
            }

            function sendData() {

                    var nome = document.getElementById("nome").value;
                    var profissao = document.getElementById("profissao").value;
                    var cpf = document.getElementById("cpf").value; // verificar
                    var rg = document.getElementById("rg").value;
                    var email = document.getElementById("email").value;
                    // verificar
                    var telefone = document.getElementById("number").value;
                    // verificar
                    var cep = document.getElementById("cep").value;
                    var bairro = document.getElementById("bairro").value;
                    var complemento = document.getElementById("local").value;
                    var rua = document.getElementById("rua").value;
                    var estado = document.getElementById("uf").value;
                    var cidade = document.getElementById("cidade").value;
                    var assunto = document.getElementById("assunto").value;
                    var problema = document.getElementById("problema").value;

                    var obj = {
                        dataSend: [
    
                        ]   
                    }
    


                    if(cpfValidate(cpf) == true ){
                       console.log('teste')
                       
                       verify_number(telefone);
                    setTimeout(function() {
                        
                        if(controle_callback.valid == true){
                            console.log('teste 2')
                            obj.dataSend.push(
                                {
                                    Nome: nome,
                                    Profissao: profissao,
                                    Cpf: cpf,
                                    Rg: rg,
                                    Email: email,
                                    Telefone: telefone,
                                    Cep: cep,
                                    Bairro: bairro,
                                    Complemento: complemento,
                                    Rua: rua,
                                    Estado :estado,
                                    Cidade: cidade,
                                    Assunto: assunto,
                                    Problema: problema 
                                })

                                var json = JSON.stringify(obj);
                                console.log(json)
                            }
                        }, 3000);

                    }

                    
                    
                    

                    // send file to php 
                    // window.location.href= "sendQuestion.php?" + json;
    
            }
                </script>
        </body>
    </html>