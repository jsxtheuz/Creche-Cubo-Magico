<?php
    include("./db/conexao.php");
?>

<html lang="pt-br" >      
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous" />
        <link rel="stylesheet" href="../styles/menu.css" />
        <title>Início</title>
    </head>

    <body> 
        <section>
            <ul class="nav flex-column">
                <div class="box-das-li">
                    <li class="nav-item">
                        <img src="https://img.icons8.com/ios-glyphs/30/null/home-page--v1.png" width="30px" height="30px"/> 
                        <a class="nav-link active" href="./home.php">Início</a>
                    </li>

                    <li class="nav-item">
                        <img src="https://img.icons8.com/fluency-systems-filled/48/null/user.png" width="30px" height="30px"/>
                        <a class="nav-link active" href="#">Alunos</a>
                    </li>

                    <li class="nav-item">
                        <img src="https://img.icons8.com/sf-regular-filled/48/null/book.png" width="30px" height="30px"/>
                        <a class="nav-link active" href="#">Atividades</a>
                    </li>

                    <li class="nav-item">
                        <img src="https://img.icons8.com/ios-glyphs/30/null/visible--v1.png" width="30px" height="30px"/>
                        <a class="nav-link active" href="#">Observações</a>
                    </li>

                    <li class="nav-item">
                        <img src="https://img.icons8.com/ios-filled/50/null/calendar--v1.png" width="30px" height="30px"/>
                        <a class="nav-link active" href="#">Agenda</a>
                    </li>
                </div>
            </ul>
        </section>
    </body>
</html>