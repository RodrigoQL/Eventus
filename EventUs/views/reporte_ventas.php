<?php
include("../models/reporte_ventas.php");
include("../models/session.php");

CheckSession();
?>
<!doctype html>
<html lang="es">
  <head>
  <meta charset="utf-8">
  <title>Eventus - Reporte de Ventas</title>
  <!-- RENDERING CORRECTO DEPENDIENDO DEL TAMANO DE LA PANTALLA -->
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!-- LLAMA REFERENCIAS CDN DE BOOTSTRAP Y LIBRERIAS REQUERIDAS POR BOOTSTRAP -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
  <link rel="stylesheet" href="../assets/css/reporteventas-styles.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
</head>
<body>
  <nav class="navbar navbar-expand-lg navbar-light bg-light">
    <a class="navbar-brand" href="#">Eventus</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav mr-auto">
        <li class="nav-item">
          <a class="nav-link" href="admin.php">Inicio</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="negocios.php">Negocios</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="categorias_negocios.php">Categorías de Negocios</a>
        </li>
        <li class="nav-item active">
          <a class="nav-link" href="reporte_ventas.php">Reporte de Ventas</a>
        </li>
      </ul>
    </div>

    <a class="btn btn-lg btn-primary btn-block boton_salir" href="../logout.php">Cerrar Sesión</a>
  </nav>
  <div class="row container">
    <div class="col-sm-12 col-md-12 col-lg-12 mx-auto">
      <div class="card card-signin my-5">
        <div class="card-body">
          <h5 class="card-title">Reporte de Ventas</h5>
          <table class="table">
            <thead>
              <tr>
                <th>ID de la Orden</th>
                <th>Cliente</th>
                <th>Negocio</th>
                <th>Fecha de Compra</th>
                <th>Total</th>
              </tr>
            </thead>
            <tbody>
              <?php 
              $ventas = seleccionar_ventas();
              if(!empty($ventas)){
              foreach ($ventas as $key => $venta) { ?>
                <tr>
                  <td><?php echo $venta['Id']; ?></td>
                  <td><?php echo $venta['Username']; ?></td>
                  <td><?php echo $venta['Name']; ?></td>
                  <td><?php echo $venta['CreatedDate']; ?></td>
                  <td>$<?php echo number_format($venta['Total'], 2, '.', ','); ?></td>
                </tr>
                <?php }}else{ ?>
                  <tr>
                    <td colspan="5">No hay resultados</td>
                  </tr>
                <?php } ?>
            </tbody>
          </table>
        </div>
      </div>
    </div>
  </div>
</body>
</html>