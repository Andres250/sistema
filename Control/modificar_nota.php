<?php
?>
<?php
include_once "../Config/conexion.php";
include_once "../modelo/Nota.php";
$nota = new Nota($_POST["puntaje"], $_POST["id_estudiante"], $_POST["id_materia"]);
$nota->guardar();
header("Location: ../View/notas_estudiante.php?id=" . $_POST["id_estudiante"]);
