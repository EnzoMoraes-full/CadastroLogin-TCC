<?php
$servername = "localhost:3306";
$username = "root";
$password = "";
$dbname = "db_logincadastro";

$nome = $_POST["nome"];
$cpf = $_POST["cpf"];
$email = $_POST["email"];
$senha = $_POST["senha"];
$placa = $_POST["placa"];

// Conexão com a primeira tabela
$conn1 = new mysqli($servername, $username, $password, $dbname);
if ($conn1->connect_error) {
    die("Falha na conexão com a primeira tabela: " . $conn1->connect_error);
}

// Consulta SQL para a primeira tabela
$sql1 = 'INSERT INTO tb_cadastro (nome, cpf, email, senha, placa) VALUES ('. "'".$nome. "'"  .',' . "'".$cpf."'".', '."'". $email."'".', '."'".$senha. "'".','."'". $placa."'".')';


if ($conn1->query($sql1) === TRUE) {
    echo "Dados inseridos na primeira tabela com sucesso";
} else {
    echo "Erro ao inserir dados na primeira tabela: " . $conn1->error;
}

// Fechar a conexão com a primeira tabela
$conn1->close();

// Conexão com a segunda tabela
$conn2 = new mysqli($servername, $username, $password, $dbname);
if ($conn2->connect_error) {
    die("Falha na conexão com a segunda tabela: " . $conn2->connect_error);
}

// Consulta SQL para a segunda tabela
$sql2 = "INSERT INTO tabela2 (campo1, campo2, campo3) VALUES ('valor1', 'valor2', 'valor3')";

if ($conn2->query($sql2) === TRUE) {
    echo "Dados inseridos na segunda tabela com sucesso";
} else {
    echo "Erro ao inserir dados na segunda tabela: " . $conn2->error;
}

// Fechar a conexão com a segunda tabela
$conn2->close();
?>

