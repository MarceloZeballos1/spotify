<?php

$server = "localhost";
$user = "root";
$pass = "";
$db = "ucb_spotify_bdd";

$conexion = new mysqli($server, $user, $pass, $db);

if ($conexion->connect_error) {
    die("Conexión Fallida" . $conexion->connect_error);
}

?>