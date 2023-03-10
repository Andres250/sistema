<?php
 ?>
<?php
include_once "../Config/conexion.php";
include_once "../View/encabezado.php";
include_once "../modelo/Materia.php";
$materias = Materia::obtener();
?>
<div class="row">
    <div class="col-12">
        <h1>Listado de materias</h1>
        <a href="../View/formulario_registro_materia.php" class="btn btn-info my-2">Nueva</a>
    </div>
    <div class="col-12 table-responsive">
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>Nombre</th>
                    <th>Editar</th>
                    <th>Eliminar</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($materias as $materia) { ?>
                    <tr>
                        <td><?php echo $materia["nombre"] ?></td>
                        <td>
                            <a href="../View/editar_materia.php?id=<?php echo $materia["id"] ?>" class="btn btn-warning">
                                Editar
                            </a>
                        </td>
                        <td>
                            <a href="../Control/eliminar_materia.php?id=<?php echo $materia["id"] ?>" class="btn btn-danger">
                                Eliminar
                            </a>
                        </td>
                    </tr>
                <?php } ?>
            </tbody>
        </table>
    </div>
</div>
<?php
include_once "pie.php";
