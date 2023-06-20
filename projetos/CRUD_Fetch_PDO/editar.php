<?php
$host = 'localhost';
$dbname = 'cadastro';
$user = 'root';
$pass = '';

$retorno = array();

$conn = new PDO("mysql:host=$host; dbname=$dbname", $user, $pass);
$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

$nome = $_POST["nome"];
$id = $_POST["id"];
$email = $_POST["email"];
$data_nascimento = $_POST["data_nascimento"];

$stmt = $conn->prepare("UPDATE usuarios SET
nome='$nome',
email='$email',
data_nascimento='$data_nascimento'
WHERE id='$id'");

if ($stmt->execute()) {
    $retorno["msg"] = "Editado com sucesso";
} else {
    $retorno["msg"] = "falha";
}

echo json_encode($retorno);

