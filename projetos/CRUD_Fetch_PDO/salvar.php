<?php

$host = 'localhost';
$dbname = 'cadastro';
$user = 'root';
$pass = '';

$retorno = array();

try {
    $conn = new PDO("mysql:host=$host; dbname=$dbname", $user, $pass);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    // echo "Conexão com o banco de dados estabelecida com sucesso!";
} catch (PDOException $e) {
    // echo "Erro na conexão com o banco de dados: " . $e->getMessage();
}

// salva os dados no banco
if ($_SERVER['REQUEST_METHOD'] === 'POST') {

    try {
        // Pega os dados enviados pelo formulário
        $nome = $_POST['nome'];
        $email = $_POST['email'];
        $senha = md5($_POST['senha']);
        $data_nascimento = $_POST['data_nascimento'];


        $stmt = $conn->prepare("INSERT INTO usuarios (nome, email, senha, data_nascimento)
            VALUES (:nome, :email, :senha, :data_nascimento)");
        $stmt->bindParam(':nome', $nome);
        $stmt->bindParam(':email', $email);
        $stmt->bindParam(':senha', $senha);
        $stmt->bindParam(':data_nascimento', $data_nascimento);

        $stmt->execute();
        $retorno["msg"] = "Dados inseridos com sucesso";
    } catch (PDOException $e) {
        $retorno["msg"] = "Erro ao inserir dados: " . $e->getMessage();
    }
} else {
    $retorno = "Erro ao enviar dados";
}
echo json_encode($retorno);
