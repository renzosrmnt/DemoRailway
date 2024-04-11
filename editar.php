<?php
include("conexion.php");
$con = conexion();

$id = $_GET["id"];

$sql = "SELECT * FROM alumno WHERE idpersona = $id";
$result = pg_query($con, $sql);
$row = pg_fetch_assoc($result);
?>

<!doctype html>
<html lang="es">
<head>
    <title>Editar Registro</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="/docs/4.0/assets/img/favicons/favicon.ico">

    

    <link rel="canonical" href="https://getbootstrap.com/docs/4.0/examples/pricing/">

    <!-- Bootstrap core CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
</head>

<body>

    <div class="d-flex flex-column flex-md-row align-items-center p-3 px-md-4 mb-3 bg-white border-bottom box-shadow">
      <h5 class="my-0 mr-md-auto font-weight-normal"><img src="index2.png" style="width: 30px; position: absolute;"> <span style="position: relative; left: 35px;">Index</span></h5>
      <nav class="my-2 my-md-0 mr-md-3">
        <a class="p-2 text-dark" href="./listar.php">Listar</a>
      </nav>
    </div>

    <div class="container px-3 py-3 pt-md-5 pb-md-4 mx-auto text-center">
      <h1 class="display-4">Edición de registro</h1>
    </div>

    <div class="container">
      <div class="card">
        <div class="card-body">
            <form autocomplete="off" action="actualizar.php" method="post">
                <input type="hidden" name="id" value="<?php echo $row['idpersona']; ?>">
            <div class="row">
              <div class="col-sm-4 col-4">
                <div class="form-group">
                  <label>Nro Documento</label>
                  <input type="text" name="doc" maxlength="8" class="form-control" value="<?php echo $row['documento']; ?>">
                </div>
              </div>
              <div class="col-sm-4 col-4">
                <div class="form-group">
                  <label>Nombre</label>
                  <input type="text" name="nom" class="form-control" value="<?php echo $row['nombre']; ?>">
                </div>
              </div>
              <div class="col-sm-4 col-4">
                <div class="form-group">
                  <label>Apellidos</label>
                  <input type="text" name="ape" class="form-control" value="<?php echo $row['apellido']; ?>">
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col-sm-4 col-4">
                <div class="form-group">
                  <label>Direccion</label>
                  <input type="text" name="dir" class="form-control" value="<?php echo $row['direccion']; ?>">
                </div>
              </div>
              <div class="col-sm-4 col-4">
                <div class="form-group">
                  <label>Celular</label>
                  <input type="text" name="cel" class="form-control" value="<?php echo $row['celular']; ?>">
                </div>
              </div>
            </div>
            <input type="submit" class="btn btn-primary float-right" value="Actualizar">
          </form>
        </div>
      </div>

</body>
</html>
