<?php require_once("../../templates/header.php"); ?>
crear aplicacion agraria 
<div class="card">
    <div class="card-header">App Agraria</div>
    <div class="card-body">
        <form action="ag_fertilizantes" method="post" enctype="multipart/form-data">
            <div class="mb-3">
                <label for="ag_fertilizantes" class="form-label">Agregar fertilizantes</label>
                <input
                    type="text"
                    class="form-control"
                    name="ag_fertilizantes"
                    id="ag_fertilizantes"
                    aria-describedby="helpId"
                    placeholder="Agregar fertilizantes"
                />
                <br>
                <label for="" class="form-label">Agregar Insumos</label>
                <input
                    type="text"
                    class="form-control"
                    name=""
                    id=""
                    aria-describedby="helpId"
                    placeholder="Agregar insumos"
                />
                <br>
                <label for="" class="form-label">Agregar Semillas</label>
                <input
                    type="text"
                    class="form-control"
                    name=""
                    id=""
                    aria-describedby="helpId"
                    placeholder="Agregar semillas"
                />
                <br>
                <label for="" class="form-label">Agregar Telefonos</label>
                <input
                    type="number"
                    class="form-control"
                    name=""
                    id=""
                    aria-describedby="helpId"
                    placeholder="Agregar telefonos"
                />
                
            </div>
            <button
                type="submit"
                name=""
                id=""
                class="btn btn-primary"
                href="#"
                role="button"
                >Agregar registro
            </button>
            <a
                name=""
                id=""
                class="btn btn-danger"
                href="./index.php"
                role="button"
                >Cancelar</a
            >
            
        </form>
    </div>
   
</div>

<?php require_once("../../templates/footer.php"); ?>