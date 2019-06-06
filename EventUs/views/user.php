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

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fancybox/3.2.5/jquery.fancybox.min.css" />
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet"
        integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
    <link rel="stylesheet" href="../assets/css/user-styles.css">
    <div class="container-fluid">
        <h1 align="center">Tipo de Negocio</h1>
        <div id="category-list" class="row">
            <div class="col-md-3 col-sm-4 col-xs-12 single_portfolio_text category">
                <img src="http://i.imgur.com/PUeaHfC.png" alt="" class="category-image"/>
                <div class="portfolio_images_overlay text-center ">
                    <h6 class="clrd-font category-title">Italian Source Mushroom</h6>
                    <p class="clrd-font product_price"> <i class="fa fa-usd clrd-font" aria-hidden="true"></i> 12</p>
                    <a href="#" class="btn btn-primary">Click here</a>
                </div>
            </div>
            <div class="col-md-3 col-sm-4 col-xs-12 single_portfolio_text category">
                <img src="http://i.imgur.com/uX3g4Nl.png" alt="" class="category-image"/>
                <div class="portfolio_images_overlay text-center">
                    <h6 class="clrd-font category-title">Italian Source Mushroom</h6>
                    <p class="clrd-font product_price"> <i class="fa fa-usd clrd-font" aria-hidden="true"></i> 12</p>
                    <a href="#" class="btn btn-primary">Click here</a>
                </div>
            </div>
            <div class="col-md-3 col-sm-4 col-xs-12 single_portfolio_text category">
                <img src="http://i.imgur.com/8cOtAS9.png" alt="" class="category-image"/>
                <div class="portfolio_images_overlay text-center">
                    <h6 class="clrd-font category-title">Italian Source Mushroom</h6>
                    <p class="clrd-font product_price"> <i class="fa fa-usd clrd-font" aria-hidden="true"></i> 12</p>
                    <a href="#" class="btn btn-primary">Click here</a>
                </div>
            </div>


        </div>
    </div>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/fancybox/3.2.5/jquery.fancybox.min.js"></script>
    <script src="../assets/js/script.js"></script>


</body>

</html>