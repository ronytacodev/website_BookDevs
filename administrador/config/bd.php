<?php
// PARA INFINITY FREE
    // $host="sql303.epizy.com";
    // $bd="epiz_33257783_sitio";
    // $usuario="epiz_33257783";
    // $contrasenia="HjLUwKSf9iySZ1K";

// PARA 000WEBHOST
    // $host="localhost";
    // $bd="id20060482_sitio";
    // $usuario="id20060482_adminrony";
    // $contrasenia="hNw0ShQH\@6(%@s*";


    // PARA SERVER LOCAL USAR CREDENCIALES ABAJO
    $host="localhost:33065";
    $bd="sitio";
    $usuario="root";
    $contrasenia="";


    try {
        $conexion = new PDO("mysql:host=$host;dbname=$bd",$usuario,$contrasenia); 
        // if($conexion) {echo "Conectado ... a sistema";}

    } catch (Exception $ex) {
    
        echo $ex->getMessage();
    }
?>

