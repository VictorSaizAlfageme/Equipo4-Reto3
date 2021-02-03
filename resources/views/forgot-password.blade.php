<!DOCTYPE html>
<html lang="en">

<head>
    <title>Nuve</title>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta name="author" content="Equipo4"/>
    <meta name="copyright" content="Todos los derechos reservados a Nuve"/>
    <meta name="description"
          content="Pagina web pública creada y organizada por la empresa Nuve "/>
    <link rel="icon" type="image/png" href="../../public/img/logo.png">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <!-- Custom fonts for this template-->
    <link href="../../public/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link
            href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
            rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="../../public/css/style.css" rel="stylesheet">

</head>

<body class="bg-gradient-primary">

    <div class="container">

        <!-- Outer Row -->
        <div class="row justify-content-center">

            <div class="col-xl-10 col-lg-12 col-md-9">

                <div class="card o-hidden border-0 shadow-lg my-5">
                    <div class="card-body p-0">
                        <!-- Nested Row within Card Body -->
                        <div class="row">
                            <div class="col-lg-6 d-none d-lg-block bg-login-image"></div>
                            <div class="col-lg-6">
                                <div class="p-5">
                                    <div class="text-center">
                                        <h1 class="h4 text-gray-900 mb-2">¿Has olvidado tu contraseña?</h1>
                                        <p class="mb-4">Introduce tu dirección de correo electrónico que usaste para registrarte. Te enviaremos un correo electrónico con tu nueva contraseña!</p>
                                    </div>
                                    <form class="user">
                                        <div class="form-group">
                                            <input type="email" class="form-control form-control-user"
                                                id="exampleInputEmail" aria-describedby="emailHelp"
                                                placeholder="Dirección de correo">
                                        </div>
                                        <a href="login.blade.php" class="btn btn-primary btn-user btn-block">
                                            ENVIAR
                                        </a>
                                    </form>
                                    <hr>
                                    <div class="text-center">
                                        <small>¿No tienes cuenta? </small><a class="small" href="register.blade.php">Registrate aquí.</a>
                                    </div>
                                    <div class="text-center">
                                        <small>¿Ya tienes cuenta? </small><a class="small" href="login.blade.php">Inicia sesión.</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>

        </div>

    </div>

    <!-- Bootstrap core JavaScript-->
    <script src="../../public/jquery/jquery.min.js"></script>
    <script src="../../public/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="../../public/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="components/js/sb-admin-2.min.js"></script>

</body>

</html>