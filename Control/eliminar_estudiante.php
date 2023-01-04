<?php
?>
<?php
include_once "../Config/conexion.php";
include_once "../modelo/Estudinates.php";
Estudiante::eliminar($_GET["id"]);
header("Location: ../View/mostar_estudiantes.php");
