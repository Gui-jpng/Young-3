<?php
      // VARIAVEIS DO AMBIENTE
      $servidor = 'localhost';
      $banco_de_dados = 'loja_naiquie';
      $usuario = 'root';
      $senha = ''; // nao tem senha

     // CRIAR CONEXÃO
      $conn = new mysqli($servidor,$usuario,$senha);

     if($conn->error){

        die ('Falha ao conectar');
     }
  
       // COMANDO PARA MOSTAR UM BANCO DE DADOS EXPECIFICO
        $sql_check_db = "SHOW DATABASES LIKE '$banco_de_dados'";

       // EXECUTAR O COMANDO ACIMA
       $resultado = $conn->query($sql_check_db);
      

       //VERIFICAR SE NUMERO DE LINHAS É IGUAL A 0

       if($resultado->num_rows == 0){
        //COMANDO PARA CRIAR DADOS
        $sql_codigo = "CREATE DATABASE $banco_de_dados";
        if($conn->query($sql_codigo) === TRUE){
            echo'banco de dados criado com sucesso';

        }
        else{
          die('erro ao criar'. $conn->error);
        }
       }
     else{
        echo 'banco de dados ja existe';
    }

      // CONECTA AO BANCO DE DADOS
    $conn->select_db($banco_de_dados);

    // CRIANDO TABELAS
    $tabelas =[
        "fornecedores"  => "
            CREATE TABLE fornecedores(
                id INT AUTO_INCREMENT PRIMARY KEY,
                nome VARCHAR(100) NOT NULL,
                cidade VARCHAR (50) NOT NULL
            )
        ",
        "produtos"  => "
            CREATE TABLE produtos(
                id INT AUTO_INCREMENT PRIMARY KEY,
                nome VARCHAR(100) NOT NULL,
                marca VARCHAR(50) NOT NULL,
                tamanho VARCHAR(10) NOT NULL,
                preco DECIMAL (10,2) NOT NULL,
                quantidade INT NOT NULL,
                id_fornecedor INT,
                FOREIGN KEY(id_fornecedor) REFERENCES fornecedores(id)
            )
        ",
        "usuarios"=> "
             CREATE TABLE usuarios(
                id INT AUTO_INCREMENT PRIMARY KEY,
                nome VARCHAR(100) NOT NULL,
                telefone VARCHAR(15) NOT NULL,
                data_nascimento DATE NOT NULL,
                cps VARCHAR(11) UNIQUE NOT NULL,
                cep VARCHAR(9) NOT NULL
            )
        ",
        "vendas"  => "
            CREATE TABLE vendas(
                id INT AUTO_INCREMENT PRIMARY KEY,
                data_venda DATE NOT NULL,
                id_produto INT,
                id_usuario INT,
                FOREING KEY(id_produtos) REFERENCES produtos(id),
                FOREING KEY(id_usuarios) REFERENCES usuarios(id)
            )
        "
    ];
      foreach($tabelas as $nome => $sql){
        $sql_check_table = "SHOW TABLES LIKE'$nome'";
        $resultado = $conn->query($sql_check_table);
      
        if($resultado->num_rows == 0){
            if($conn-> query($sql) === TRUE){
                echo "Tabela '$nome' criada com sucesso";
            }
            else{
                 echo " erro ao criar tabela'$nome' ja existe";
            }
        }
        else{
            echo "Tabela '$nome' ja existe";
        }
    }
?>