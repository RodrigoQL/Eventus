<!doctype html>
<html lang="es">
  <head>
  <meta charset="utf-8">
  <title>Eventus - Editar Categoría</title>
  <!-- RENDERING CORRECTO DEPENDIENDO DEL TAMANO DE LA PANTALLA -->
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!-- LLAMA REFERENCIAS CDN DE BOOTSTRAP Y LIBRERIAS REQUERIDAS POR BOOTSTRAP -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
  <link rel="stylesheet" href="../assets/css/formcategoria-styles.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
  <script src="../controllers/edit_categoria_controller.js"></script>
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
        <li class="nav-item active">
          <a class="nav-link" href="categorias_negocios.php">Categorías de Negocios</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="reporte_ventas.php">Reporte de Ventas</a>
        </li>
      </ul>
    </div>
  </nav>
  <div class="row container">
    <div class="col-sm-6 col-md-6 col-lg-6 mx-auto">
      <div class="card card-signin my-5">
        <div class="card-body">
          <h5 class="card-title text-center">Editar Categoría</h5>
          <form class="form-nueva-categoria">
            <input type="hidden" name="id" id="id" value="<?php echo $_POST['id']; ?>">
            <div class="form-label-group">
              <input type="text" id="name" class="form-control" placeholder="Nombre" value="<?php echo $_POST['name']; ?>" required>
            </div>
            <div class="form-label-group">
              <textarea id="description" class="form-control" placeholder="Descripción" rows="5" required><?php echo $_POST['description']; ?></textarea>
            </div>
            <button class="btn btn-lg btn-primary btn-block boton_nuevo" type="submit" id="submit">Guardar</button>
          </form>
        </div>
    </div>
  </div>
</body>
</html>