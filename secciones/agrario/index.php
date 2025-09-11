<?php
if(isset($_GET['txtID']))
{
    $txtID = (isset($_GET['txtID']))?$_GET['txtID']:"";

    require_once("../../conexion.php"); // ajusta la ruta si es distinta

    // Preparar consulta
    $sentencia = $conexion->prepare("DELETE FROM ag_agropecuaria WHERE id=:id");
    $sentencia->bindParam(":id",$txtID);
    $sentencia->execute();

    header("Location: index.php");
}
require_once("../../conexion.php"); // ajusta la ruta si es distinta

// Preparar consulta
$sentencia = $conexion->prepare("SELECT * FROM ag_agropecuaria");

// Ejecutar
$sentencia->execute();

// Guardar resultados
$lista_agropecuaria = $sentencia->fetchAll(PDO::FETCH_ASSOC);
?>

<?php require_once("../../templates/header.php"); ?>

 
<h1>App Agraria</h1>
<div class="card">
    <div class="card-header">
       <a
        name=""
        id=""
        class="btn btn-primary"
        href="./crear.php"
        role="button"
        >Agregar agrario</a
    >
    </div>
    
    <div
        class="table-responsive"
    >
        <table
            class="table"
        >
            <thead>
                <tr>
                    <th scope="col">ID</th>
                    <th scope="col">Fertilizantes</th>
                    <th scope="col">Insumos</th>
                    <th scope="col">Semillas</th>
                    <th scope="col">Telefonos</th>
                    <th scope="col">Acciones</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($lista_agropecuaria as $registro) { ?>
                <tr class="">
                    <td scope="row"><?php echo $registro['id']?></td>
                    <td><?php echo $registro['fertilizantes']; ?></td>
                    <td><?php echo $registro['insumos']; ?></td>
                    <td><?php echo $registro['semillas']; ?></td>
                    <td><?php echo $registro['telefonos']; ?></td>
                    <td>
                        <a
                        name=""
                        id=""
                        class="btn btn-info"
                        href="#"
                        role="button"
                        >Editar
                        </a>
                         |
                         <a
                        name=""
                        id=""
                        class="btn btn-danger"
                        href="index.php?txtID=<?php echo $registro['id']?>"
                        role="button"
                        >Eliminar
                        </a>
                     </td>

                </tr>
                <?php } ?>
            </tbody>
        </table>
    </div>
    
</div>

<?php require_once("../../templates/footer.php"); ?>