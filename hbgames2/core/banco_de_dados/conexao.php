<?php

$hostname = "localhost";
$database = "hbgames2";
$user = "root";
$password = "";

$mysqli = new mysqli($hostname, $user, $password, $database);

if ($mysqli->connect_error) {

    echo "Falha a conectar no banco: (" . $mysqli->connect_errno . ") " . $mysqli->connect_error;

}

//echo "Conexao Feita"

?>