<?php include("../template/cabecera.php"); ?>

<div class="col-md-5">

    <div class="card">
        <div class="card-header">
            Datos de Libro
        </div>

        <div class="card-body">

            <form method="POST" enctype="multipart/form-data" >

                <div class = "form-group">
                    <label for="txtID">ID:</label>
                    <input type="text" class="form-control" name="txtID" id="txtID" placeholder="Escribe el ID">
                </div>

                <div class = "form-group">
                    <label for="txtNombre">Nombre:</label>
                    <input type="text" class="form-control" name="txtNombre" id="txtNombre" placeholder="Escribe el nombre del libro">
                </div>

                <div class = "form-group">
                    <label for="imagen">Imagen:</label>
                    <input type="file" class="form-control" name="imagen" id="imagen" placeholder="Selecciona la imagen">
                </div>

                <div class="btn-group" role="group" aria-label="">
                    <button type="button" class="btn btn-success">Agregar</button>
                    <button type="button" class="btn btn-warning">Modificar</button>
                    <button type="button" class="btn btn-info">Cancelar</button>
                </div>

            </form>
        </div>

    </div>
    
</div>


<div class="col-md-7">

    <table class="table table-bordered">
        <thead>
            <tr>
                <th>ID</th>
                <th>Nombre</th>
                <th>Imagen</th>
                <th>Acciones</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>2</td>
                <td>Aprende Php</td>
                <td>imagen.jpg</td>
                <td>Seleccionar | Borrar</td>
            </tr>

        </tbody>
    </table>

</div>

<?php include("../template/pie.php"); ?>