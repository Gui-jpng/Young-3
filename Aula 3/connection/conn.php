<?php
 // VARIAVEIS PARA SE CONECTAR AO BD
 $servidor = 'localhost';
 $banco_de_dados = 'usuarios';
 $usuario = 'root';
 $senha = '';

$conn = new PDO("mysql:host=$servidor;dbname=$banco_de_dados",$usuario,$senha);

?>