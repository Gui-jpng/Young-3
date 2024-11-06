<?php
require '../connection/conn.php';

//coletar dados e guardar em uma variavel
$usuario = $_POST['usuario'];
$senha = $_POST['senha'];


$codigo_sql = "SELECT * FROM teste WHERE usuario = '$usuario' AND senha = '$senha'";
$x = $conn -> prepare($codigo_sql);
var_dump($x);

?>