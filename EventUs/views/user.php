<!doctype html>
    <html>
        <head>

            <title>.:: Eventus ::.</title>
            <meta charset="utf-8">
    
            <!-- RENDERING CORRECTO DEPENDIENDO DEL TAMANO DE LA PANTALLA -->
            <meta name="viewport" content="width=device-width, initial-scale=1">
    
            <!-- LLAMA REFERENCIAS CDN DE BOOTSTRAP Y LIBRERIAS REQUERIDAS POR BOOTSTRAP -->
            <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
            <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
            <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
            <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
            <script src="../controllers/user_controller.js"></script>
        </head>
        <body class="body">
            <div id="navbar">
                <input type="button" id="cart-button" value="Carrito de Compras" />
            </div>
            <h1>Selecciona una categoria</h1>
            <div id="category-list" class="row">
                Cargando categorías....
            </div>
            <br>
            <div id="business-list">
            </div>
        </body>
</html>