<?php
session_start();
$host = 'localhost';
$dbname = 'cadastro';
$user = 'root';
$pass = '';

$retorno = array();

$conn = new PDO("mysql:host=$host; dbname=$dbname", $user, $pass);
$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

//tratando os dados recebidos do formulário
function validaInput($data)
{
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $novoNome = validaInput($_POST['nomeM']);
    $novaSenha = md5(validaInput($_POST['senhaM']));
}

try {
    $stmt = $conn->prepare("INSERT INTO usuarios (nome, senha)
        VALUES (:nome, :senha)");
    $stmt->bindParam(':nome', $novoNome);
    $stmt->bindParam(':senha', $novaSenha);

    $stmt->execute();
    $retorno["msg"] = "Usuário cadastrado com sucesso!";
    $_SESSION["user"] = $novoNome;
    $_SESSION["senha"] = $novaSenha;
} catch (PDOException $e) {
    echo "erro";
}

echo json_encode($retorno);
