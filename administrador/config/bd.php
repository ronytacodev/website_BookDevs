<?php
    $host="localhost";
    $bd="sitio";
    $usuario="root";
    $contrasenia="rony123456";
    // $conexion="";

    try {
        $conexion = new PDO("mysql:host=$host;dbname=$bd",$usuario,$contrasenia); 
        if($conexion) {echo "Conectado ... a sistema";}

    } catch (Exception $ex) {
    
        echo $ex->getMessage();
    }
?>

