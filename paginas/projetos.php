<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Produtos Cadastrados</title>

    <!-- Bootstrap css -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
    </script>

    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css"
    integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw=="
    crossorigin="anonymous" referrerpolicy="no-referrer" />

    <script src="" defer></script>
    <link rel="stylesheet" href="../Estilos/estilosProjetos.css">

</head>
<header>
    <ul class="menu">
        <li><a href="./index.php">Home</a></li>
        <li><a href="./sobreMim.php">About Me</a></li>
        <li id="voltar">
            <a href="./index.php"><i class="fa fa-arrow-left"></i>Back</a>
        </li>
    </ul>
</header>

<body>
    <div class="container-fluid">
        <div class="row mt-5">
            <div class="col">

                <div class="card mb-3" style="max-width: 540px;">
                    <a href="../projetos/calculadora/calc.html" target="_blank" class="link-projetos">
                        <div class="row g-0">
                            <div class="col-md-4">
                                <img src="../img/calculadora_js.PNG" class="img rounded-start" alt="...">
                            </div>
                            <div class="col-md-8">
                                <div class="card-body">
                                    <h5 class="card-title">Javascript Calculator</h5>
                                    <p class="card-text">In this project i create a calculator that supports basic
                                        arithmetic calculations on integers</p>
                                    <p class="card-text"><small class="text-body-secondary">Last updated 3 mins ago
                                        </small>
                                    </p>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>

            </div>
            <div class="col">

                <a href="../projetos/CRUD_Fetch_PDO/index.php" target="_blank" class="link-projetos">
                    <div class="card mb-3" style="max-width: 540px;">
                        <div class="row g-0">
                            <div class="col-md-4">
                                <img src="../img/crud.PNG" class="img rounded-start" alt="...">
                            </div>
                            <div class="col-md-8">
                                <div class="card-body">
                                    <h5 class="card-title">CRUD</h5>
                                    <p class="card-text">This is a wider card with supporting text below as a natural
                                        lead-in to additional content. This content is a little bit longer.</p>
                                    <p class="card-text"><small class="text-body-secondary">Last updated 3 mins ago
                                    </small></p>
                                </div>
                            </div>
                        </div>
                    </div>
                </a>

            </div>
            <div class="col"></div>
        </div>
</body>

</html>