<?php
 // VARIAVEIS PARA SE CONECTAR AO BD
 $servidor = 'localhost';
 $banco_de_dados = 'usuarios';
 $usuario = 'root';
 $senha = '';

$conn = new mysqli($servidor,$usuario,$senha,$banco_de_dados);

?>