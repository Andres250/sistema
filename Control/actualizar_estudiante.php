<?php
 ?>
<?php
include_once "../Config/conexion.php";
include_once "../modelo/Estudinates.php";
$estudiante = new Estudiante($_POST["nombre"], $_POST["grupo"], $_POST["id"]);
$estudiante->actualizar();
header("Location: ../View/mostar_estudiantes.php");
