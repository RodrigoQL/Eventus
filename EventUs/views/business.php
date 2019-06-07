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
            <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
            <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
            <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
            <script src="../controllers/business_controller.js"></script>
        </head>
        <body class="body">
            <div id="navbar">
                <input type="button" id="cart-button" value="Carrito de Compras" />
            </div>
            <div id="business-info">
                <img class="business-image" src="<?php echo $business['LogoUrl']; ?>">
                <h1 id="business_name"> <?php echo $business['Name']; ?> </h1>
                <h3 id="business_type"> <?php echo $business['CategoryName']; ?> </h3>
                <p id="business_description"> <?php echo $business['Description']; ?> </p>
            </div>
            <br>
            <br>
            <div id="package-list">
            </div>
        </body>
</html>