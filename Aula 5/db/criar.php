<?php
    require_once '../connection/conn.php';

    $nome = $_POST['nome'];
    $telefone = $_POST['telefone'];
    $data_nascimento = $_POST['data_nascimento'];
    $cep = $_POST['cep'];
    $cpf = $_POST['cpf'];

    $sql_codigo = "INSERT INTO clientes (nome,telefone,data_nascimento,cep,cpf) VALUES ('$nome','$telefone','$data_nascimento','$cep','$cpf')";

    $resultado = $conn -> query($sql_codigo);
    if($resultado ===TRUE){
        header('location: ../screens/index.php?erro');
    }
?>