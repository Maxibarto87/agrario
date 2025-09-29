<?php
if($_POST)
{
    //conexion con la base de datos
    require_once("../../conexion.php");
    $ag_fertilizantes = $_POST['ag_fertilizantes'] ?? "";
    $ag_insumos      = $_POST['ag_insumos'] ?? "";
    $ag_semillas     = $_POST['ag_semillas'] ?? "";
    $ag_telefonos    = $_POST['ag_telefonos'] ?? "";

    // Insertar en la base de datos
    $sentencia = $conexion->prepare("INSERT INTO ag_agropecuaria 
    (fertilizantes, insumos, semillas, telefonos) 
    VALUES (:ag_fertilizantes, :ag_insumos, :ag_semillas, :ag_telefonos)");

$sentencia->bindParam(":ag_fertilizantes", $ag_fertilizantes);
$sentencia->bindParam(":ag_insumos", $ag_insumos);
$sentencia->bindParam(":ag_semillas", $ag_semillas);
$sentencia->bindParam(":ag_telefonos", $ag_telefonos);

    $sentencia->execute();

    header("Location: index.php");
    exit;
}
?>

<?php require_once("../../templates/header.php"); ?>
 


// Formulario para crear
<div class="card">
    <div class="card-header">Crear formularios Agrario</div>
    <div class="card-body">
        <form action="crear.php" method="post" enctype="multipart/form-data">
            <div class="mb-3">
                <label for="ag_fertilizantes" class="form-label">Agregar fertilizantes</label>
                <input type="text" class="form-control" name="ag_fertilizantes" id="ag_fertilizantes" placeholder="Agregar fertilizantes"/>

                <br>
                <label for="ag_insumos" class="form-label">Agregar Insumos</label>
                <input type="text" class="form-control" name="ag_insumos" id="ag_insumos" placeholder="Agregar insumos"/>

                <br>
                <label for="ag_semillas" class="form-label">Agregar Semillas</label>
                <input type="text" class="form-control" name="ag_semillas" id="ag_semillas" placeholder="Agregar semillas"/>

                <br>
                <label for="ag_telefonos" class="form-label">Agregar Telefonos</label>
                <input type="number" class="form-control" name="ag_telefonos" id="ag_telefonos" placeholder="Agregar telefonos"/>
            </div>
            
            <button type="submit" class="btn btn-primary">Agregar registro</button>
            <a class="btn btn-danger" href="./index.php">Cancelar</a>
        </form>
    </div>
</div>

<?php require_once("../../templates/footer.php"); ?>