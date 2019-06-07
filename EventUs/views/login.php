<?php
    include("../models/submit_login.php");
    include("../models/session.php");

    $my_user = $_POST['username'];
    $my_pass = $_POST['password'];
    
    if( ($my_user <> "" ) && ( $my_pass <> "" ) ){	
        $recordsArray = validateUser($my_user, $my_pass);
        
        $rowCount = count( $recordsArray );
        
        if( $rowCount > 0 ) {
            SetSession($recordsArray[0]['Id'], $recordsArray[0]['IdUserType']);
            $id_user_type = $recordsArray[0]['IdUserType'];
        } else {
            $id_user_type = 0;
        }

        if( $id_user_type == 1 ){
            header( "Location:admin.php" );
        } else if( $id_user_type == 2 ){
            header( "Location:business_manage.php" );
        } else if( $id_user_type == 3 ){
            header( "Location:user.php" );
        } else {
            $label = "Error de Usuario y/o Password!";
        }
    }
?>

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
                                <form id="form1" name="form1" method="post" action="login.php">

                                    <div class="form-label-group">
                                        <input type="text" id="username" class="form-control"
                                            placeholder="Ingresar Usuario" name="username" required autofocus>
                                        <label for="username">Usuario</label>
                                    </div>

                                    <div class="form-label-group">
                                        <input type="password" id="password" class="form-control"
                                            placeholder="Ingresar Contraseña" name="password" required>
                                        <label for="password">Contraseña</label>
                                    </div>

                                    <p>
                                        <input type="submit" name="submit" id="submit" value="Ingresar"
                                            class="btn btn-lg btn-primary btn-block btn-login text-uppercase font-weight-bold mb-2" />
                                        <input type="button" name="create_user" id="create_user" value="Crear Cuenta"
                                            class="btn btn-lg btn-primary btn-block btn-login text-uppercase font-weight-bold mb-2" />
                                            <a href="../index.html">Regresar al inicio</a>
                                    </p>
                                    <p id="alert"> <?php echo $label; ?> </p>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

</html>