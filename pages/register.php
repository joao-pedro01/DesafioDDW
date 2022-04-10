<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Bootstrap 5.1.3 -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <!-- CSS externo -->
    <link rel="stylesheet" media="screen and (min-device-width: 768px)" href="../style/style.css" />
    <link rel="stylesheet" media="screen and (max-device-width: 767px)" href="../style/mobile.css" />
    <style>
        form{
            margin-top: 1rem;
        }
        .btn{
            margin-top: 1rem;
        }
    </style>
    <title>Registro</title>
</head>
<body>
    <?php include '../templates/navbar.html' ?>

    <section class="vh-100 gradient-custom">
        <div class="container py-5 h-100">
            <div class="row d-flex justify-content-center align-items-center h-100">
                <div class="col-12 col-md-8 col-lg-6 col-xl-5">
                    <div class="card bg-dark text-white" style="border-radius: 1rem;">
                        <div class="card-body p-5 text-center">
                            <div class="mb-md-5 mt-md-4 pb-5">

                                <form action="../scripts/register.php" method="post">
                                    <h2 class="fw-bold mb-2">Registre-se</h2>
                                    <p class="text-white-50 mb-5">Por favor, digite seus dados para se registrar!</p>
                            
                                    <div class="form-outline form-white mb-4">
                                        <input type="text" id="typeUserName" class="form-control form-control" placeholder="Nome do usuário" name="username" required/>
                                    </div>

                                    <div class="form-outline form-white mb-4">
                                        <input type="email" id="typeEmailX" class="form-control form-control" placeholder="Email@example.com" name="email" required/>
                                    </div>

                                    <div class="form-outline form-white mb-4">
                                        <input type="password" id="typePasswordX" class="form-control form-control" placeholder="Senha" name="senha" required/>
                                    </div>

                                    <div class="form-outline form-white mb-4">
                                        <label class="form-label" for="typeDate">Data de nascimento</label>
                                        <input type="date" id="typePasswordX" class="form-control form-control" placeholder="Senha" name="datanasc" required/>
                                    </div>

                                    <button class="btn btn-outline-light btn-lg px-5" type="submit">Cadastrar</button>
                                    <div>
                                        <p class="mb-0 mt-3">Tem conta? <a href="login.php" class="text-white-50 fw-bold">Entrar</a></p>
                                    </div>
                                </form>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <!-- Script JS -->
    <script src="../scripts/main.js"></script>
    <!-- Script Bootstrap -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/   IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
</body>
</html>