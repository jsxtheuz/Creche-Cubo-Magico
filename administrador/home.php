<?php
    include("../db/conexao.php");
?>

<html lang="pt-br" >      
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous" />
        <link rel="stylesheet" href="../styles/menu.css" />
        <script crossorigin src="https://unpkg.com/react@18/umd/react.development.js"></script>
        <script crossorigin src="https://unpkg.com/react-dom@18/umd/react-dom.development.js"></script>
        <title>Agenda</title>
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
                        <img src="https://img.icons8.com/ios-filled/50/null/teacher.png" width="30px" height="30px"/>
                            <a class="nav-link active" href="#">Professores</a>
                        </li>

                        <li class="nav-item">
                            <img src="https://img.icons8.com/ios-filled/50/null/calendar--v1.png" width="30px" height="30px"/>
                            <a class="nav-link active" href="./agenda.php">Agenda</a>
                        </li>

                        <li class="nav-item">
                            <img src="https://img.icons8.com/ios-filled/50/null/database.png" width="30px" height="30px"/>
                            <a class="nav-link active" href="#">Dados</a>
                        </li>
                    </div>
                </ul>
        </section>
    </body>
</html>