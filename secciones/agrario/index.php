<?php require_once("../../templates/header.php"); ?>
Mostrar aplicacion agraria 
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
                    <th scope="ID">ID</th>
                    <th scope="col">Fertilizantes</th>
                    <th scope="col">Insumos</th>
                    <th scope="col">Semillas</th>
                    <th scope="col">Telefonos</th>
                    <th scope="col">Acciones</th>
                </tr>
            </thead>
            <tbody>
                <tr class="">
                    <td scope="row">1</td>
                    <td>urea</td>
                    <td>raundup</td>
                    <td>trigo</td>
                    <td>2395411213</td>
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
                        href="#"
                        role="button"
                        >Eliminar
                        </a>
                     </td>

                </tr>
                
            </tbody>
        </table>
    </div>
    
</div>



<?php require_once("../../templates/footer.php"); ?>