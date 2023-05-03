<?php

    include("./db/conexao.php");
    $erro = "<p class='text-danger'</p>";
    if(isset($_POST['usuario']) || isset($_POST['senha'])){

        $cpf = $_POST['usuario'];
        $senha = $_POST['senha'];

        if($cpf == "" || $cpf == null || strlen($cpf) == 0) {
           $erro = "<p class='text-danger'>Preencha o campo CPF<p>";
        }

        if(strlen($cpf) != 11){
            $erro = "<p class='text-danger>CPF Inválido</p>";
        }

        if ($cpf == '00000000000' || 
		$cpf == '11111111111' || 
		$cpf == '22222222222' || 
		$cpf == '33333333333' || 
		$cpf == '44444444444' || 
		$cpf == '55555555555' || 
		$cpf == '66666666666' || 
		$cpf == '77777777777' || 
		$cpf == '88888888888' || 
		$cpf == '99999999999'){
            $erro = "<p class='text-danger>CPF Inválido</p>";
        }

        if($senha == "" || $senha == null|| strlen($senha) == 0) {
            $erro = "<p class='text-danger'>Preencha o campo Senha<p>";
        }
        
            header("Location: ./home.php");
    }
?>

<html lang="pt-br">

    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
        <link rel="stylesheet" href="../styles/logins.css" />
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous" />
        <title>Login - Professor</title>
    </head>

    <body>
    <section class="vh-100">
        <div class="container-fluid h-custom">
            <div class="row d-flex justify-content-center align-items-center h-100">
            <div class="col-md-9 col-lg-6 col-xl-5">
                <img src="https://cdn.asp.events/CLIENT_Ascentia_4E961A52_5056_B739_54289B84DF34E888/sites/BettBrasil2022Portuguese/media/libraries/bett-blog/Student%20guy%20studying%20on%20internet.jpg" class="img-fluid" alt="Sample image">
            </div>
            <div class="col-md-8 col-lg-6 col-xl-4 offset-xl-1">
                <form method="POST">
                
                <div class="form-outline mb-4">
                    <input type="text" id="usuario" name="usuario" class="form-control form-control-lg"
                    placeholder="Insira seu CPF" />
                    <label class="form-label" for="form3Example3">CPF</label>
                </div>

               
                <div class="form-outline mb-3">
                    <input type="password" id="senha" name="senha" class="form-control form-control-lg"
                    placeholder="Insira sua Senha" />
                    <label class="form-label" for="form3Example4">Senha</label>
                </div>

                <div class="d-flex justify-content-between align-items-center">
                    
                    <div class="form-check mb-0">
                    <input class="form-check-input me-2" type="checkbox" value="" id="save" />
                    <label class="form-check-label" for="save">
                        Lembrar
                    </label>
                    </div>
                    <a href="#!" class="text-body">Esqueceu a senha?</a>
                </div>
                <a class="a" href=""><button type="submit" class="btn btn-primary btn-lg btn-block">Login</button></a>

                <?php
                    echo $erro
                ?>
                </form>
            </div>
            </div>
        </div>
        </section>
    </body>

</html>