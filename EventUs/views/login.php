<!doctype html>
<html>

<head>

    <title>.:: Eventus Login ::.</title>
    <meta charset="utf-8">

    <!-- RENDERING CORRECTO DEPENDIENDO DEL TAMANO DE LA PANTALLA -->
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- LLAMA REFERENCIAS CDN DE BOOTSTRAP Y LIBRERIAS REQUERIDAS POR BOOTSTRAP -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="../assets/css/login-styles.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
    <script src="../controllers/login_controller.js"></script>
</head>

<body class="body">

    <div class="container-fluid">
        <div class="row no-gutter">
            <div class="d-none d-md-flex col-md-4 col-lg-6 bg-image"></div>
            <div class="col-md-8 col-lg-6">
                <div class="login d-flex align-items-center py-5">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-9 col-lg-8 mx-auto">
                                <h3 class="login-heading mb-4">BIENVENIDO A EVENTUS</h3>

                                <div class="form-label-group">
                                    <input type="email" id="username" class="form-control"
                                        placeholder="Ingresar Usuario" required autofocus>
                                    <label for="username">Usuario</label>
                                </div>

                                <div class="form-label-group">
                                    <input type="password" id="password" class="form-control"
                                        placeholder="Ingresar Contraseña" required>
                                    <label for="password">Contraseña</label>
                                </div>

                                <p>
                                    <input type="button" name="submit" id="submit" value="Ingresar"
                                        class="btn btn-lg btn-primary btn-block btn-login text-uppercase font-weight-bold mb-2" />
                                    <input type="button" name="create_user" id="create_user" value="Crear Cuenta"
                                        class="btn btn-lg btn-primary btn-block btn-login text-uppercase font-weight-bold mb-2" />
                                        <a href="../index.html">Regresar al inicio</a>
                                </p>
                                <p id="alert">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

</html>