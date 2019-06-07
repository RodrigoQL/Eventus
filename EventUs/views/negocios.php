<?php
include("../models/negocios.php");
include("../models/session.php");

CheckSession();
?>
<!doctype html>
<html lang="es">
  <head>
  <meta charset="utf-8">
  <title>Eventus - Negocios</title>
  <!-- RENDERING CORRECTO DEPENDIENDO DEL TAMANO DE LA PANTALLA -->
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!-- LLAMA REFERENCIAS CDN DE BOOTSTRAP Y LIBRERIAS REQUERIDAS POR BOOTSTRAP -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
  <link rel="stylesheet" href="../assets/css/negocios-styles.css">
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
        <li class="nav-item active">
          <a class="nav-link" href="negocios.php">Negocios</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="categorias_negocios.php">Categorías de Negocios</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="reporte_ventas.php">Reporte de Ventas</a>
        </li>
      </ul>
    </div>

    <a class="btn btn-lg btn-primary btn-block boton_salir" href="#">Cerrar Sesión</a>
  </nav>
  <div class="row container">
    <div class="col-sm-12 col-md-12 col-lg-12 mx-auto">
      <div class="card card-signin my-5">
        <div class="card-body">
          <h5 class="card-title">Negocios</h5>
          <table class="table">
            <thead>
              <tr>
                <th>ID</th>
                <th>Nombre</th>
                <th>Descripción</th>
                <th>Categoría</th>
                <th>Rating</th>
                <th>Editar</th>
                <th>Eliminar</th>
              </tr>
            </thead>
            <tbody>
              <?php 
              $negocios = seleccionar_negocios();
              if(!empty($negocios)){
              foreach ($negocios as $key => $negocio) { ?>
                <tr>
                  <td><?php echo $negocio['Id']; ?></td>
                  <td><?php echo $negocio['Name']; ?></td>
                  <td><?php echo $negocio['Description']; ?></td>
                  <td><?php echo $negocio['Categoria']; ?></td>
                  <td><?php echo $negocio['Rating']; ?></td>
                  <td>
                    <form method="post" action="editar_negocio.php">
                      <input type="hidden" name="Id" value="<?php echo $negocio['Id']; ?>">
                      <input type="hidden" name="IdLocation" value="<?php echo $negocio['IdLocation']; ?>">
                      <input type="hidden" name="Name" value="<?php echo $negocio['Name']; ?>">
                      <input type="hidden" name="Description" value="<?php echo $negocio['Description']; ?>">
                      <input type="hidden" name="LogoUrl" value="<?php echo $negocio['LogoUrl']; ?>">
                      <input type="hidden" name="IdBusinessType" value="<?php echo $negocio['IdBusinessType']; ?>">
                      <input type="hidden" name="Latitude" value="<?php echo $negocio['Latitude']; ?>">
                      <input type="hidden" name="Longitude" value="<?php echo $negocio['Longitude']; ?>">
                      <input type="hidden" name="Suburb" value="<?php echo $negocio['Suburb']; ?>">
                      <input type="hidden" name="Street" value="<?php echo $negocio['Street']; ?>">
                      <input type="hidden" name="Number" value="<?php echo $negocio['Number']; ?>">
                      <input type="hidden" name="ApplicationStep" value="<?php echo $negocio['ApplicationStep']; ?>">
                      <button class="btn btn-lg btn-warning btn-block boton_tabla" type="submit" id="submit">Editar</button>
                    </form>
                  </td>
                  <td>
                    <form method="post" action="../models/eliminar_negocio.php">
                      <input type="hidden" name="id_negocio" value="<?php echo $negocio['Id']; ?>">
                      <!-- Session -->
                      <input type="hidden" name="id_user" value="1">
                      <button class="btn btn-lg btn-danger btn-block boton_tabla" type="submit" id="submit">Eliminar</button>
                    </form>
                  </td>
                </tr>
              <?php }}else{ ?>
                <tr>
                  <td colspan="7">No hay resultados</td>
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