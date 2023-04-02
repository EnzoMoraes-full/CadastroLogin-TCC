<?php
$host = "localhost:3306";
$dbname = "db_tcc_estacionamento";
$user = "root";
$password = "";

try {
    $conn = new PDO("mysql:host=$host;dbname=$dbname", $user, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch(PDOException $e) {
    echo "Falha na conexão: " . $e->getMessage();
}

$nome = $_POST["nome"];
$cpf = $_POST["cpf"];
$email = $_POST["email"];
$senha = $_POST["senha"];
$placa = $_POST["placa"];


$sql = "INSERT INTO tb_cadastro (nome, cpf, email, senha, placa) VALUES (:nome, :cpf, :email, :senha, :placa)";
$stmt = $conn->prepare($sql);
$stmt->bindParam(':nome', $nome);
$stmt->bindParam(':cpf', $cpf);
$stmt->bindParam(':email', $email);
$stmt->bindParam(':senha', $senha);
$stmt->bindParam(':placa', $placa);
$stmt->execute();

echo "Dados salvos com sucesso";
?>



<div class="divpai">
    <div class="conteudo-main">
        
        <br>
        <br>
        <h1>Recuperação de senha</h1>
        <br>
    <h4>Preencha os dados para recuperação de senha</h4>
    <br>
    <div class="conteudo-main-dados">
        <span>E-mail</span>
        <br>
        <input type="text" id="recu">
        <br>
        <button type="submit">Recuperar</button>
    </div>
    </div>
</div>



