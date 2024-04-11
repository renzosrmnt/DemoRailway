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
    <!-- Incluir estilos y scripts necesarios -->
</head>

<body>
    <div class="container">
        <h2 class="mt-5 mb-4">Editar Registro</h2>
        <form autocomplete="off" action="actualizar.php" method="post">
            <input type="hidden" name="id" value="<?php echo $row['idpersona']; ?>">
            <div class="form-group">
                <label>Nro Documento</label>
                <input type="text" name="doc" maxlength="8" class="form-control" value="<?php echo $row['documento']; ?>">
            </div>
            <div class="form-group">
                <label>Nombre</label>
                <input type="text" name="nom" maxlength="8" class="form-control" value="<?php echo $row['nombre']; ?>">
            </div>
            <div class="form-group">
                <label>Apellidos</label>
                <input type="text" name="ape" maxlength="8" class="form-control" value="<?php echo $row['apellido']; ?>">
            </div>
            <div class="form-group">
                <label>Dirección</label>
                <input type="text" name="dir" maxlength="8" class="form-control" value="<?php echo $row['direccion']; ?>">
            </div>
            <div class="form-group">
                <label>Celular</label>
                <input type="text" name="cel" maxlength="8" class="form-control" value="<?php echo $row['celular']; ?>">
            </div>
            <input type="submit" class="btn btn-primary" value="Actualizar">
        </form>
    </div>
</body>
</html>
