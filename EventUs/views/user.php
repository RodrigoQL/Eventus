<!doctype html>
<html>

<head>

    <title>.:: Eventus ::.</title>
    <meta charset="utf-8">

    <!-- RENDERING CORRECTO DEPENDIENDO DEL TAMANO DE LA PANTALLA -->
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- LLAMA REFERENCIAS CDN DE BOOTSTRAP Y LIBRERIAS REQUERIDAS POR BOOTSTRAP -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
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
          <span class="glyphicon glyphicon-shopping-cart"></span> Carrito de Compras
        </a>
    </nav>

    <div id="category-list">
        <div class="category">
            <h3 class="category-title">Título de Categoría</h3>
            <img class="category-image" src="https://www.w3schools.com/html/pic_trulli.jpg">
        </div>
        <div class="category">
            <h3 class="category-title">Título de Categoría 2</h3>
            <img class="category-image" src="https://www.w3schools.com/html/pic_trulli.jpg">
        </div>
        <div class="category">
            <h3 class="category-title">Título de Categoría 3</h3>
            <img class="category-image" src="https://www.w3schools.com/html/pic_trulli.jpg">
        </div>
    </div>
    <br>
    <div id="business-list">
        <div class="business">
            <h3 class="business-title">Nombre de negocio 1</h3>
            <img class="business-image"
                src="https://image.shutterstock.com/image-vector/restaurant-logo-template-260nw-1254530365.jpg">
            <div class="business-stars">
                Estrellas aquí
            </div>
        </div>
        <div class="business">
            <h3 class="business-title">Nombre de negocio 2</h3>
            <img class="business-image"
                src="https://image.shutterstock.com/image-vector/restaurant-logo-template-260nw-1254530365.jpg">
            <div class="business-stars">
                Estrellas aquí
            </div>
        </div>
    </div>
</body>

</html>