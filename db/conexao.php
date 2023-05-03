<?php

$servidor="localhost";
$user="root";
$password="";
$banco="creche";

$mysqli = new mysqli($servidor, $user, $password, $banco);

if($mysqli->error) {
    die("falha ao conectar ao banco de dados: " . $mysqli->error);
}

?>