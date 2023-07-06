<?php

$host = 'localhost';
$dbname = 'cadastro';
$user = 'root';
$pass = '';

$retorno = array();

$conn = new PDO("mysql:host=$host; dbname=$dbname", $user, $pass);
$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);


$dados = file_get_contents('php://input');
$dados = json_decode($dados);

$stmt = $conn->prepare("DELETE FROM usuarios WHERE id=" . $dados->id);
if ($stmt->execute()) {
    $retorno["msg"] = "deu certo";
} else {
    $retorno["msg"] = "deu errado";
}
echo json_encode($retorno);
