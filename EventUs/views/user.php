<?php
    include("../models/session.php");
    CheckSession();
?>

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
    <link rel="stylesheet" href="../assets/css/user-styles.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
    <script src="../controllers/user_controller.js"></script>
</head>

<body class="body">
    <nav id="navbar" class="navbar navbar-dark bg-dark justify-content-between">
        <a class="navbar-brand " href="user.php">EVENTUS</a>
        <p>
        <a id="cart-button" class="btn btn-info btn-lg" href="cart.php">
            <span class="glyphicon glyphicon-shopping-cart"></span> Carrito de Compras
        </a>
        <a id="cart-button" class="btn btn-info btn-lg" href="../logout.php">Salir</a></p>
    </nav>

    <div class="container">
        <h1 align="center">Selecciona el tipo de negocio</h1>
        <div id="category-list" class="row">
            Cargando categorías....
        </div>
        <br>
        <div id="business-list">
        </div>
    </div>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/fancybox/3.2.5/jquery.fancybox.min.js"></script>
    <script src="../assets/js/script.js"></script>

</body>

</html>