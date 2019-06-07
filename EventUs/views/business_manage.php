<?php
include("../models/categorias.php");
include("../models/negocio_perfil.php");
?>
<!doctype html>
<html>
<head>
  <title>Eventus - Negocio</title>
  <meta charset="utf-8">
  <!-- RENDERING CORRECTO DEPENDIENDO DEL TAMANO DE LA PANTALLA -->
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!-- LLAMA REFERENCIAS CDN DE BOOTSTRAP Y LIBRERIAS REQUERIDAS POR BOOTSTRAP -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
  <link rel="stylesheet" href="../assets/css/business-manage-styles.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
  <script src="../controllers/create_negocio_controller.js"></script>
</head>
<body>
  <nav class="navbar navbar-expand-lg navbar-light bg-light">
    <a class="navbar-brand" href="#">Eventus</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav mr-auto">
        <li class="nav-item active">
          <a class="nav-link" href="business_manage.php">Mi Perfil</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="paquetes.php">Paquetes</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="reporte_negocio.php">Reporte de Ventas</a>
        </li>
      </ul>
    </div>

    <a class="btn btn-lg btn-primary btn-block boton_salir" href="#">Cerrar Sesión</a>
  </nav>
  <div class="row container">
    <div class="col-sm-6 col-md-6 col-lg-6 mx-auto">
      <div class="card card-signin my-5">
        <div class="card-body">
          <?php
          /*session*/
          $id_user = 5;
          /*session*/
          $perfil = seleccionar_perfil($id_user);
          if(empty($perfil)){
            $perfil['Id'] = 0;
            $perfil['IdLocation'] = 0;
            $perfil['Name'] = "";
            $perfil['Description'] = "";
            $perfil['LogoUrl'] = "";
            $perfil['IdBusinessType'] = "";
            $perfil['Latitude'] = "";
            $perfil['Longitude'] = "";
            $perfil['Suburb'] = "";
            $perfil['Street'] = "";
            $perfil['Number'] = "";
            $perfil['ApplicationStep'] = "";
          }
          ?>
          <h5 class="card-title text-center">Actualizar Perfil</h5>
          <form class="form-nueva-categoria">
            <input type="hidden" id="id_negocio" value="<?php echo $perfil['Id']; ?>">
            <input type="hidden" id="id_user" value="<?php echo $id_user; ?>">
            <input type="hidden" id="id_location" value="<?php echo $perfil['IdLocation']; ?>">
            <div class="form-label-group">
              <input type="text" id="name" class="form-control" placeholder="Nombre" required value="<?php echo $perfil['Name']; ?>">
            </div>
            <div class="form-label-group">
              <textarea id="description" class="form-control" placeholder="Descripción" rows="5" required><?php echo $perfil['Description']; ?></textarea>
            </div>
            <div class="form-label-group">
              <input type="text" id="logo" class="form-control" placeholder="URL del logo" required value="<?php echo $perfil['LogoUrl']; ?>">
            </div>
            <div class="form-label-group">
              <select id="categoria" class="form-control" required>
                <option value="">Selecciona una categoría...</option>
                <?php 
                $categorias = seleccionar_categorias();
                if(!empty($categorias)){
                foreach ($categorias as $key => $categoria) { ?>
                  <option <?php if($perfil['IdBusinessType'] == $categoria['Id']){ echo 'selected'; } ?> value="<?php echo $categoria['Id']; ?>"><?php echo $categoria['Name']; ?></option>
                <?php }} ?>
              </select>
            </div>
            <div class="form-label-group">
              <input type="number" min="0" step="0.01" id="latitud" class="form-control" placeholder="Latitud" required value="<?php echo $perfil['Latitude']; ?>">
            </div>
            <div class="form-label-group">
              <input type="number" min="0" step="0.01" id="longitud" class="form-control" placeholder="Longitud" required value="<?php echo $perfil['Longitude']; ?>">
            </div>
            <div class="form-label-group">
              <input type="text" id="colonia" class="form-control" placeholder="Colonia" required value="<?php echo $perfil['Suburb']; ?>">
            </div>
            <div class="form-label-group">
              <input type="text" id="calle" class="form-control" placeholder="Calle" required value="<?php echo $perfil['Street']; ?>">
            </div>
            <div class="form-label-group">
              <input type="number" min="0" id="numero" class="form-control" placeholder="Número" required value="<?php echo $perfil['Number']; ?>">
            </div>
            <div class="form-label-group">
              <input type="number" min="0" id="step" class="form-control" placeholder="Paso de la Solicitud" required value="<?php echo $perfil['ApplicationStep']; ?>">
            </div>
            <button class="btn btn-lg btn-primary btn-block boton_nuevo" type="submit" id="submit">Guardar</button>
          </form>
        </div>
      </div>
    </div>
  </div>
</body>
</html>