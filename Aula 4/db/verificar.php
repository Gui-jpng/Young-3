<?php
require '../connection/conn.php';

//coletar dados e guardar em uma variavel
$usuario = $_POST['usuario'];
$senha = $_POST['senha'];

//comando sql para selecionar o usuario no banco de dados
$codigo_sql = "SELECT * FROM teste WHERE usuario = '$usuario' AND senha = '$senha'";


$sql_query = $conn -> query ($codigo_sql);
$quantidade_linhas = $sql_query -> num_rows;

if($quantidade_linhas == 1){
    header('location: ../screens/painel.php');
}


?>