<?php
include("conexion.php");
$con = conexion();

$id = $_GET["id"];

$sql = "DELETE FROM alumno WHERE idpersona = $id";
pg_query($con, $sql);

header("location:listar.php"); // Redireccionar a la página de lista de registros
?>
