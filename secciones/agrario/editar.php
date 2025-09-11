<?php
require_once("../../conexion.php");
if(isset($_GET['txtID']))
{
    $txtID = (isset($_GET['txtID'])) ? $_GET['txtID'] : "";
}
$sentencia = $conexion->prepare("SELECT * FROM ag_agropecuaria WHERE id=:id"); 
$sentencia->bindParam(":id",$txtID);
$sentencia->execute();   
$registro = $sentencia->fetch(PDO::FETCH_LAZY);
$ag_fertilizantes = $registro['ag_fertilizantes'];
$ag_insumos = $registro['ag_insumos'];
$ag_semillas = $registro['ag_semillas'];
$ag_telefonos = $registro['ag_telefonos'];

if($_POST)
{
    $ag_fertilizantes = $_POST['ag_fertilizantes'] ?? "";
    $ag_insumos      = $_POST['ag_insumos'] ?? "";
    $ag_semillas     = $_POST['ag_semillas'] ?? "";
    $ag_telefonos    = $_POST['ag_telefonos'] ?? "";

    // Preparar consulta
    $sentencia = $conexion->prepare("UPDATE ag_agropecuaria 
    SET 
    fertilizantes=:ag_fertilizantes,
    insumos=:ag_insumos,
    semillas=:ag_semillas,
    telefonos=:ag_telefonos
    WHERE id=:id");

}

?>
<?php require_once("../../templates/header.php"); ?>
    
<div class="card">
    <div class="card-header">Crear formularios Agrario</div>
    
    <div class="card-body">
        <form action="" method="post" enctype="multipart/form-data">
            <div class="mb-3">
                <label for="txtid" class="form-label">ID</label>
                <input type="text" class="form-control" name="txtid" id="txtid" placeholder="" readonly/>
                <label for="ag_fertilizantes" class="form-label">Agregar fertilizantes</label>
                <input type="text" class="form-control" name="ag_fertilizantes" id="ag_fertilizantes" value="<?php echo $ag_fertilizantes;?>"placeholder="Agregar fertilizantes"/>

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
            
            <button type="submit" class="btn btn-primary">Editar registro</button>
            <a class="btn btn-danger" href="./index.php">Cancelar</a>
        </form>
    </div>
</div>

<?php require_once("../../templates/footer.php"); ?>