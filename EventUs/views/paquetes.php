<?php
include("../models/paquetes.php");
include("../models/session.php");

CheckSession();
?>
<!doctype html>
<html lang="es">
  <head>
  <meta charset="utf-8">
  <title>Eventus - Paquetes</title>
  <!-- RENDERING CORRECTO DEPENDIENDO DEL TAMANO DE LA PANTALLA -->
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!-- LLAMA REFERENCIAS CDN DE BOOTSTRAP Y LIBRERIAS REQUERIDAS POR BOOTSTRAP -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
  <link rel="stylesheet" href="../assets/css/paquetes-styles.css">
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
    <div class="col-sm-12 col-md-12 col-lg-12 mx-auto">
      <div class="card card-signin my-5">
        <div class="card-body">
          <h5 class="card-title">Paquetes</h5>
          <?php 
          $id_user = GetSessionUserId();
          if(contar_paquetes($id_user) < 4){ ?>
            <a href="crear_paquete.php" class="btn btn-lg btn-primary btn-block boton_nuevo">Crear Paquete</a>
          <?php }else{ ?>
            <p>Lo sentimos, sólo puedes agregar 4 paquetes.</p>
          <?php } ?> 
          <table class="table">
            <thead>
              <tr>
                <th>ID</th>
                <th>Nombre</th>
                <th>Descripción</th>
                <th>Precio</th>
                <th>Imagen</th>
                <th>Editar</th>
                <th>Eliminar</th>
              </tr>
            </thead>
            <tbody>
              <?php 
              $paquetes = seleccionar_paquetes($id_user);
              if(!empty($paquetes)){
              foreach ($paquetes as $key => $paquete) { ?>
                <tr>
                  <td><?php echo $paquete['Id']; ?></td>
                  <td><?php echo $paquete['Name']; ?></td>
                  <td><?php echo $paquete['Description']; ?></td>
                  <td><?php echo number_format($paquete['Price'], 2, '.', ','); ?></td>
                  <td><?php echo $paquete['ImageUrl']; ?></td>
                  <td>
                    <form method="post" action="editar_paquete.php">
                      <input type="hidden" name="id" value="<?php echo $paquete['Id']; ?>">
                      <input type="hidden" name="name" value="<?php echo $paquete['Name']; ?>">
                      <input type="hidden" name="description" value="<?php echo $paquete['Description']; ?>">
                      <input type="hidden" name="price" value="<?php echo $paquete['Price']; ?>">
                      <input type="hidden" name="image" value="<?php echo $paquete['ImageUrl']; ?>">
                      <button class="btn btn-lg btn-warning btn-block boton_tabla" type="submit" id="submit">Editar</button>
                    </form>
                  </td>
                  <td>
                    <form method="post" action="../models/eliminar_paquete.php">
                      <input type="hidden" name="id" value="<?php echo $paquete['Id']; ?>">
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