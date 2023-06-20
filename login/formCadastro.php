<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <script src="../Javascript/scriptLogin.js" defer></script>
    <link rel="stylesheet" href="./css/styleLogin.css">

    <!-- Bootstrap css -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css"
    rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC"
    crossorigin="anonymous">

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
    </script>

    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css"
    integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw=="
    crossorigin="anonymous" referrerpolicy="no-referrer" />

    <title>Cadastro de Novo Usuário</title>

</head>

<body>
    <nav class="navbar bg-dark border-bottom border-bottom-dark">
        <div class="container">
            <a class="navbar-brand" href="#">
                <img src="../img/perfil-icon.png" alt="logo" width="50">
            </a>
            <a href="#" id="voltar">
                <i class="fa fa-arrow-left">Voltar</i>
            </a>
        </div>
    </nav>

    <div class="container mt-5">
        <div class="row">
            <div class="col">

            </div>
            <div class="col mt-5">
                <div class="card mb-5">
                    <div class="card-header">
                        <strong>Informe seus dados para o cadastro</strong>
                    </div>
                    <div class="card-body">
                        <form action="" method="post" id="form">
                            <div class="mb-3">
                                <label for="">Nome</label>
                                <input type="text" name="nameM" class="form-control" id="nomeM"
                                placeholder="Informe seu usuário" required>
                            </div>
                            <div class="mb-3">
                                <label for="">Senha</label>
                                <input type="password" name="senhaM" class="form-control" id="senhaM"
                                placeholder="Informe sua senha..." required>
                            </div>
                            <button type="submit" class="btn btn-primary w-100 mt-2 rounded-pill py-2" id="btnM">
                                Cadastrar <i class="fa fa-check"></i></button>
                        </form>
                    </div>
                </div>
            </div>
            <div class="col">

            </div>
        </div>
    </div>

</body>

</html>