<?php

$host = 'localhost';
$dbname = 'cadastro';
$user = 'root';
$pass = '';


$conn = new PDO("mysql:host=$host; dbname=$dbname", $user, $pass);
$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

$sql = "SELECT * FROM usuarios WHERE id=" . $_REQUEST["id"];

$selecionar = $conn->query($sql);
$row = $selecionar->fetchObject();
$selecionar->execute();


?>

<body>
    <form action="" method="POST" id="formEdit" class="form">

        <label for="" style="display:block">Nome</label>
        <input type="text" name="nome" id="nome" value="<?php print $row->nome; ?>" class="form-control">

        <label for="email" style="display:block">E-mail:</label>
        <input type="text" name="email" id="email" value="<?php print $row->email; ?>" class="form-control">

        <label for="data" style="display:block">Data nascimento:</label>
        <input type="date" name="data" id="data_nascimento" value="<?php print $row->data_nascimento; ?>"
        class="form-control">

        <input type="submit" value="Enviar" style="display:block; margin-top:10px;"
        class="btn btn-primary" id="btnEdit">

    </form>
</body>

</html>
