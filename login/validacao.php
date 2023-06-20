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
    $nome = validaInput($_POST['nome']);
    $senha = md5(validaInput($_POST['senha']));
}

$sql = "SELECT * FROM usuarios WHERE nome = '$nome' AND senha = '$senha'";

try {
    $selecionar = $conn->prepare($sql);
    $selecionar->execute();

    $select = $selecionar->fetchAll(PDO::FETCH_OBJ);
    if (count($select) > 0) {
        $retorno["msg"] = "Acesso permitido";
        $_SESSION["user"] = $nome;
        $_SESSION["senha"] = $senha;
    } else {
        $retorno["msg"] = "Acesso negado";
        unset($_SESSION['user']);
        unset($_SESSION['senha']);
    }
} catch (PDOException $e) {
    echo "erro";
}

echo json_encode($retorno);
