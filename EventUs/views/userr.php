<!doctype html>
<html>

<head>

    <title>.:: Eventus ::.</title>
    <meta charset="utf-8">

    <!-- RENDERING CORRECTO DEPENDIENDO DEL TAMANO DE LA PANTALLA -->
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- LLAMA REFERENCIAS CDN DE BOOTSTRAP Y LIBRERIAS REQUERIDAS POR BOOTSTRAP -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="path/to/font-awesome/css/font-awesome.min.css">
    <link rel="stylesheet" href="../assets/css/styles.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
    <script src="../controllers/user_controller.js"></script>
</head>

<body class="body">

    <nav class="navbar navbar-dark bg-dark justify-content-between">
        <a class="navbar-brand">EVENTUS</a>
        <a id="cart-button" class="btn btn-info btn-lg">
            <i class="fas fa-shopping-cart"></i> Carrito de Compras
        </a>
    </nav>
    <div class="container">
        <div id="category-list" class="row">
            <div class="col-4 category">
                <h3 class="category-title">Título de Categoría 1</h3>
                <img class="category-image img-fluid" src="https://www.w3schools.com/html/pic_trulli.jpg">
            </div>
            <div class="col-4 category">
                <h3 class="category-title">Título de Categoría 2</h3>
                <img class="category-image img-fluid" src="https://www.w3schools.com/html/pic_trulli.jpg">
            </div>
            <div class="col-4 category">
                <h3 class="category-title">Título de Categoría 3</h3>
                <img class="category-image img-fluid" src="https://www.w3schools.com/html/pic_trulli.jpg">
            </div>
        </div>
        <br>
        <div id="business-list" class="row">
            <div class="col-4 business">
                <h3 class="business-title">Nombre de negocio 1</h3>
                <img class="business-image img-fluid"
                    src="https://image.shutterstock.com/image-vector/restaurant-logo-template-260nw-1254530365.jpg">
                <div class="business-stars">
                    Estrellas aquí
                </div>
            </div>
            <div class="col-4 business">
                <h3 class="business-title">Nombre de negocio 2</h3>
                <img class="business-image img-fluid"
                    src="https://image.shutterstock.com/image-vector/restaurant-logo-template-260nw-1254530365.jpg">
                <div class="business-stars">
                    Estrellas aquí
                </div>
            </div>
        </div>
    </div>
</body>

</html>