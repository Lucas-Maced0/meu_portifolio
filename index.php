<?php session_start();
if ((!isset($_SESSION['user'])) && (!isset($_SESSION['senha']))) {
    header("location: login/indexLogin.php");
}

$logado = $_SESSION['user'];
?>


<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="./Estilos/style.css">
    <script src="./Javascript/index.js" defer></script>

    <!-- Font awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <title>Meu portifólio</title>

    <!-- Bootstrap css -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
    </script>
</head>

<header>
    <nav class="navbar bg-dark border-bottom border-bottom-dark">
        <div class="container">
            <div class="logo d-flex"> <img id="form" src="./img/perfil-icon.png" alt="logo"> </div>
            <div class="menu">
                <a href="./paginas/projetos.php">My projects</a>
                <a href="./paginas/sobreMim.php">About me</a>
            </div>
        </div>
    </nav>
</header>

<body>

    <section class="sobre">
        <div class="extras">
            <a href="https://www.bartofil.com.br/"><img id="img-flutuante" src="./img/bg-logica-programacao.png" alt="">
            </a>
        </div>

        <div class="central">
            <div class="texto-sobre">
                <h2>Hello there,
                    <br><span style="color: black;">I'm Lucas!</span>
                    <br>A web developer
                    <div id="redes-sociais">
                        <a href=""><img class="perfil" id="linkedin" src="./img/icons-linkedin-desktop-social-media-linked-in-text-trademark-logo.png" alt=""></a>
                        <a href=""><img class="perfil" src="./img/github.png" alt=""></a>
                    </div>
            </div>
        </div>

        <div class="interesses">
            <a href="#"><img class="linguagens" src="./img/php-logo-php-elephant-logo-vectors-download-5.png" alt="">
            </a>
            <a href="#"><img class="linguagens" src="./img/html5-logo-devextreme-multi-purpose-controls-html-javascript-3.png" alt="">
            </a>
            <a href="#"><img class="linguagens" src="./img/sql-database-microsoft-sql-server-database-blue-text-logo.png" alt="">
            </a>
        </div>
    </section>

</body>

</html>