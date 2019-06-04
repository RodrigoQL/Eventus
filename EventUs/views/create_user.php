<!doctype html>
<html>

<head>

    <title>Eventus - Create User</title>
    <meta charset="utf-8">

    <!-- RENDERING CORRECTO DEPENDIENDO DEL TAMANO DE LA PANTALLA -->
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- LLAMA REFERENCIAS CDN DE BOOTSTRAP Y LIBRERIAS REQUERIDAS POR BOOTSTRAP -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="../assets/css/create-user-styles.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
    <script src="../controllers/create_user_controller.js"></script>
</head>

<body>
    <div class="container">
        <div class="row">
            <div class="col-sm-9 col-md-7 col-lg-5 mx-auto">
                <div class="card card-signin my-5">
                    <div class="card-body">
                        <h5 class="card-title text-center">Crear Cuenta</h5>
                        <form class="form-signin">
                            <div class="form-label-group">
                                <input type="text" id="username" class="form-control" placeholder="Email address"
                                    required autofocus>
                                <label for="username">Usuario</label>
                            </div>

                            <div class="form-label-group">
                                <input type="password" id="password" class="form-control" placeholder="Password"
                                    required>
                                <label for="password">Password</label>
                            </div>

                            <div class="form-label-group">
                                <input type="text" id="name" class="form-control" placeholder="Nombre"
                                    required>
                                <label for="name">Nombre</label>
                            </div>

                            <div class="form-label-group">
                                <input type="text" id="lastname" class="form-control" placeholder="Apellidos"
                                    required>
                                <label for="lastname">Apellidos</label>
                            </div>

                            <div class="form-label-group">
                                <input type="email" id="email" class="form-control" placeholder="E-Mail"
                                    required>
                                <label for="email">E-Mail</label>
                            </div>

                            <div class="form-label-group">
                                <input type="tel" id="phone" class="form-control" placeholder="Telefono"
                                    required>
                                <label for="phone">Telefono</label>
                            </div>

                            <button class="btn btn-lg btn-primary btn-block text-uppercase" type="submit" id="submit">Crear Cuenta</button>
                            <p id="alert"></p>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

</html>