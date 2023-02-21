<?php
session_start();

$servername = "localhost:3306";
$username = "root";
$password = "";
$dbname = "db_tcc_estacionamento";


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
$sql1 = 'INSERT INTO tb_cliente (cd_email_cliente, cd_senha_cliente ) VALUES ('. "'".$email. "'"  .',' . "'".$senha."'".')';


if ($conn1->query($sql1) === TRUE) {
    echo "   Dados inseridos com sucesso na 1° TABELA -";
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
$sql2 = 'INSERT INTO tb_pessoa_fisica (cd_cpf) VALUES ('. "'".$cpf. "'"  .')';

if ($conn2->query($sql2) === TRUE) {
    echo "   Dados inseridos com sucesso na 2° TABELA -";
} else {
    echo "Erro ao inserir dados na segunda tabela: " . $conn2->error;
}

// Fechar a conexão com a segunda tabela
$conn2->close();


// Conexão com a terceira tabela
$conn3 = new mysqli($servername, $username, $password, $dbname);
if ($conn3->connect_error) {
    die("Falha na conexão com a terceira tabela: " . $conn3->connect_error);
}

// Consulta SQL para a terceira tabela
$sql3 = 'INSERT INTO tb_veiculo (cd_placa) VALUES ('. "'".$placa. "'"  .')';

if ($conn3->query($sql3) === TRUE) {
    echo "   Dados inseridos com sucesso na 3° TABELA";
} else {
    echo "Erro ao inserir dados na terceira tabela: " . $conn3->error;
}

// Fechar a conexão com a terceira tabela
$conn3->close();
?>

