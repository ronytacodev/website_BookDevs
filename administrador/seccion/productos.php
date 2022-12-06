<?php include("../template/cabecera.php"); ?>
<?php

$txtID=(isset($_POST['txtID']))?$_POST['txtID']:"";
$txtNombre=(isset($_POST['txtNombre']))?$_POST['txtNombre']:"";
$txtImagen=(isset($_FILES['txtImagen']['name']))?$_FILES['txtImagen']['name']:"";
$accion=(isset($_POST['accion']))?$_POST['accion']:"";

echo $txtID."<br>";
echo $txtNombre."<br>";
echo $txtImagen."<br>";
echo $accion."<br>";

?>

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
                    <label for="txtImagen">Imagen:</label>
                    <input type="file" class="form-control" name="txtImagen" id="txtImagen" placeholder="Selecciona la imagen">
                </div>

                <div class="btn-group" role="group" aria-label="">
                    <button type="submit" name="accion" value="Agregar" class="btn btn-success">Agregar</button>
                    <button type="submit" name="accion" value="Modificar" class="btn btn-warning">Modificar</button>
                    <button type="submit" name="accion" value="Cancelar" class="btn btn-info">Cancelar</button>
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