<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <title>Login</title>
</head>
<body>
    <div class="container">
        <div class="card" style="width: 50%;">     
            <form action="login.php" method="POST">
                <div class="card-body">
                        <div class="row align-items-center">
                            <div class="col">
                                    <div class="mb-3">

                                        <label for="inputPassword5" class="form-label">Login</label>
                                        <input type="login" name="login" id="login" class="form-control" aria-describedby="passwordHelpBlock">
                                        <div id="login" class="form-text">Digite o login</div>
                            
                                        <label for="inputPassword5" class="form-label">Senha</label>
                                        <input type="senha" id="senha" name="senha" class="form-control" aria-describedby="passwordHelpBlock">
                                        <div id="senha" class="form-text">Digite sua senha</div>

                                    </div>
                                    <div class="d-grid gap-2">
                                        <button class="btn btn-primary" type="submit">Entrar</button>
                                      </div>
                            </div>
                        </div>
                    </div>
                </div>
            </form>
    </div>
</body>

<style>
    .container{
        margin-top: 30vh ;
        margin-left: 30vw;
    }

@media only screen and (max-width: 600px) {
    body {
     
    }
    .container{
        margin-top: 0vh ;
        margin-left: 0vw;
        padding-top: 55% !important;
        padding-left: 13% !important;
    }
    .card{
        width: 90% !important;
    }
}
</style>
</html>
