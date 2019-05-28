<!doctype html>
    <html>
        <head>

            <title>.:: Eventus Login ::.</title>
            <meta charset="utf-8">
    
            <!-- RENDERING CORRECTO DEPENDIENDO DEL TAMANO DE LA PANTALLA -->
            <meta name="viewport" content="width=device-width, initial-scale=1">
    
            <!-- LLAMA REFERENCIAS CDN DE BOOTSTRAP Y LIBRERIAS REQUERIDAS POR BOOTSTRAP -->
            <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
            <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
            <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
            <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
            <script src="../controllers/create_user_controller.js"></script>
        </head>
        <body class="body">
            <div style="margin: 0 auto; width: 200px; height: 150px; padding:30px;">
                <p>
                    <label for="textfield">Usuario:</label> <br />
                    <input type="text" name="user" id="username" />
                </p>
                <p>
                    <label for="password">Password:</label> <br />
                    <input type="password" name="pass" id="password" />
                </p>
                <p>
                    <label for="name">Nombre:</label> <br />
                    <input type="text" name="name" id="name" />
                </p>
                <p>
                    <label for="lastname">Apellido:</label> <br />
                    <input type="text" name="lastname" id="lastname" />
                </p>
                <p>
                    <label for="email">Email:</label> <br />
                    <input type="text" name="email" id="email" />
                </p>
                <p>
                    <label for="phone">Teléfono:</label> <br />
                    <input type="text" name="phone" id="phone" />
                </p>
                <p>
                    <input type="button" name="submit" id="submit" value="Crear Cuenta" />
                </p>
                <p id="alert">
                
                </p>
            </div>
        </body>
</html>