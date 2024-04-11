<?php
include("conexion.php");
$con = conexion();

$id = $_POST["id"];
$doc = $_POST["doc"];
$nom = $_POST["nom"];
$ape = $_POST["ape"];
$dir = $_POST["dir"];
$cel = $_POST["cel"];


$sql = "UPDATE alumno SET documento='$doc', nombre='$nom', apellido='$ape', direccion='$cel', celular='$cel' WHERE idpersona=$id"; // Modificar según tus necesidades
pg_query($con, $sql);

header("location:listar.php");
?>
