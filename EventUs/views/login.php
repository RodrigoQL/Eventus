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
            <script src="../controllers/login_controller.js"></script>
        </head>
        <body class="body">
            <div style="margin: 0 auto; width: 200px; height: 150px; padding:30px;">
            <form id="form1" name="form1" method="post" action="login.php">
                <p>
                    <label for="textfield">Usuario:</label> <br />
                    <input type="text" name="user" id="user" />
                </p>
                <p>
                    <label for="password">Password:</label> <br />
                    <input type="password" name="pass" id="pass" />
                </p>
                <p>
                    <input type="submit" name="submit" id="submit" value="Submit" />
                </p>
                <p id="alert">
                </p>
            </form>
        </div>
    </body>
</html>