<?php
 ?>
<?php
include_once "../Config/conexion.php";
include_once "../modelo/Materia.php";
Materia::eliminar($_GET["id"]);
header("Location: ../View/mostrar_materias.php");
