<?php
include("../models/session.php");
CheckSession();
include("../models/paquetes.php");
$id_user = GetSessionUserId();
$id_negocio = seleccionar_negocio($id_user);
?>
<!doctype html>
<html lang="es">
  <head>
  <meta charset="utf-8">
  <title>Eventus - Nuevo Paquete</title>
  <!-- RENDERING CORRECTO DEPENDIENDO DEL TAMANO DE LA PANTALLA -->
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!-- LLAMA REFERENCIAS CDN DE BOOTSTRAP Y LIBRERIAS REQUERIDAS POR BOOTSTRAP -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
  <link rel="stylesheet" href="../assets/css/formcategoria-styles.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
  <script src="../controllers/create_paquete_controller.js"></script>
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
          <a class="nav-link" href="business_manage.php">Mi Perfil</a>
        </li>
        <li class="nav-item active">
          <a class="nav-link" href="paquetes.php">Paquetes</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="reporte_negocio.php">Reporte de Ventas</a>
        </li>
      </ul>
    </div>

    <a class="btn btn-lg btn-primary btn-block boton_salir" href="../logout.php">Cerrar Sesión</a>
  </nav>
  <div class="row container">
    <div class="col-sm-6 col-md-6 col-lg-6 mx-auto">
      <div class="card card-signin my-5">
        <div class="card-body">
          <h5 class="card-title text-center">Crear Paquete</h5>
          <form class="form-nueva-categoria">
            <input type="hidden" id="negocio" value="<?php echo $id_negocio; ?>">
            <div class="form-label-group">
              <input type="text" id="name" class="form-control" placeholder="Nombre" required>
            </div>
            <div class="form-label-group">
              <textarea id="description" class="form-control" placeholder="Descripción" rows="5" required></textarea>
            </div>
            <div class="form-label-group">
              <input type="number" min="0" step="0.01" id="price" class="form-control" placeholder="Precio" required>
            </div>
            <div class="form-label-group">
              <input type="text" id="imagen" class="form-control" placeholder="URL de la Imagen" required>
            </div>
            <button class="btn btn-lg btn-primary btn-block boton_nuevo" type="submit" id="submit">Crear</button>
          </form>
        </div>
    </div>
  </div>
</body>
</html>