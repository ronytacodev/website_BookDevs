<?php include("template/cabecera.php");?>

<?php
    include("administrador/config/bd.php");

    $sentenciaSQL = $conexion->prepare("SELECT * FROM libros");
    $sentenciaSQL->execute();
    $listalibros = $sentenciaSQL->fetchAll(PDO::FETCH_ASSOC);

?>

<?php foreach($listalibros as $libro) { ?>

    <div class="col-md-3">
        <div class="card">
            <img class="card-img-top" src="./img/<?php echo $libro['imagen']; ?>" alt="">
            <div class="card-body">
                <h4 class="card-title"><?php echo $libro['nombre']; ?></h4>
                <a name="" id="" class="btn btn-primary" href="https://books.goalkicker.com/" target="_blank" role="button">Ver más</a>
            </div>
        </div>
    </div>

<?php } ?>

<!-- me quede en el min 3:02:56 -->
<?php include("template/pie.php");?>