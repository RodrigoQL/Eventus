<?php
    include("../models/get_business.php");
    include("../models/session.php");

    CheckSession();

    $businessId = $_GET['BusinessId'];
    if ($businessId === NULL){
        header("Location: user.php");
    }

    $business = select_business($businessId); 
    if ($business === NULL){
        header("Location: user.php");
    }
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
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
    <script src="../controllers/business_controller.js"></script>
</head>

<body>
    <nav id="navbar" class="navbar navbar-dark bg-dark justify-content-between">
        <a class="navbar-brand " href="user.php">EVENTUS</a>
        <p>
            <a id="cart-button" class="btn btn-info btn-lg" href="cart.php">
                <span class="glyphicon glyphicon-shopping-cart"></span> Carrito de Compras
            </a>
            <a id="cart-button" class="btn btn-info btn-lg" href="../logout.php">Salir</a></p>
    </nav>
    <div class="container">
        <div id="business-info" class="business">
            <div class="business-section">
                <img class="business-image" src="<?php echo $business['LogoUrl']; ?>">
            </div>
            <div class="business-section">
                <h1 id="business_name" class="business-name"> <?php echo $business['Name']; ?> </h1>
                <h3 id="business_type"> <?php echo $business['CategoryName']; ?> </h3>
                <p id="business_description"> <?php echo $business['Description']; ?> </p>
            </div>
        </div>
        <br>
        <br>
        <div id="package-list">
        </div>
        <a id="cart-button" class="btn btn-info btn-lg" href="user.php">
            <span class="glyphicon glyphicon glyphicon-fast-backward" ></span> Regresar
        </a>
    </div>
</body>

</html>