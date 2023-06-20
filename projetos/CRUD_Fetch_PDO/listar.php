<?php

$host = 'localhost';
$dbname = 'cadastro';
$user = 'root';
$pass = '';


$conn = new PDO("mysql:host=$host; dbname=$dbname", $user, $pass);
$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

$sql = "SELECT * FROM usuarios";

try {
  $selecionar = $conn->prepare($sql);
  $selecionar->execute();

  // fetch_all() busca todas as linhas de resultado e retorna o conjunto de resultados como um array associativo.
  $select = $selecionar->fetchAll(PDO::FETCH_OBJ);

  $fechamentoLinha = "</td>";

  print "<table class='table table-hover table-striped'>" .
    "<tr>" .
    "<th>#</th>" .
    "<th>Nome</th>" .
    "<th>E-mail</th>" .
    "<th>Data de Nascimento</th>" .
    "<th>Opções</th>" .
    "</tr>";
  foreach ($select as $listar) {
    print "<tr>" .
      "<td>" . $listar->id . $fechamentoLinha .
      "<td>" . $listar->nome . $fechamentoLinha .
      "<td>" . $listar->email . $fechamentoLinha .
      "<td>" . $listar->data_nascimento . $fechamentoLinha .
      "<td><button onclick=\"location.href='?page=editar&id=".$listar->id."';\" class='btn btn-success'>Editar</button>
      <button numLinha='".$listar->id."' class='btn btn-danger botao-deletar'>Excluir</button>
    </td>" .
      "</tr>";
  }
} catch (PDOException $e) {
  echo $e->getMessage();
}
