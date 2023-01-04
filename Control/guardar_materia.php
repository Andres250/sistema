<?php
 ?>
<?php
include_once "../Config/conexion.php";
include_once "../modelo/Materia.php";
$materia = new Materia($_POST["nombre"]);
$materia->guardar();
header("Location: ../View/mostrar_materias.php");
