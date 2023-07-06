<?php session_start() ?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulário de Login</title>

    <script src="../Javascript/scriptLogin.js" defer></script>
    <link rel="stylesheet" href="../Estilos/styleLogin.css">

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

</head>

<body>
    <nav class="navbar bg-dark border-bottom border-bottom-dark">
        <div class="container">
            <a class="navbar-brand" href="#">
                <img src="../img/perfil-icon.png" alt="logo" width="50">
            </a>
        </div>
    </nav>
    <div class="col-11 col-sm-8 col-md-6 col-lg-5 col-xl-4 mx-auto mt-2 mb-3">
        <div class="container">
            <div class="row">
                <div class="col">
                    <div class="card mb-5">
                        <div class="card-header">
                            <strong>Entre com usuário e senha válidos</strong>
                        </div>
                        <div class="card-body">
                            <form action="" method="post" id="form">
                                <div class="mb-3">
                                    <label for="">Nome</label>
                                    <input type="text" name="name" class="form-control" id="nome"
                                    placeholder="Informe seu usuário" required>
                                </div>
                                <div class="mb-3">
                                    <label for="">Senha</label>
                                    <input type="password" name="senha" class="form-control" id="senha"
                                    placeholder="Informe sua senha..." required>
                                </div>
                                <button type="submit" class="btn btn-primary w-100 mt-2 rounded-pill py-2"
                                id="btnLogin">Entrar</button>
                            </form>
                            <div style="text-align: center; font-size:large;font-weight: bold; margin-top:1rem">OU
                                <p style="text-align: center; font-size:large; font-weight: bold; color: #1a1e82;
                                    margin-bottom: 0px">Não sou cliente
                                </p>
                                <!-- Botão de cadastro -->
                                <a href="formCadastro.php"><button type="button" class="btn btn-success w-100
                                    mt-2 rounded-pill py-2">Cadastre-se <i class="fa fa-pen"></i></button>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <footer hidden>
        <div class="row pt-1 footer pb-5">
            
        </div>
    </footer>
</body>

</html>