<?php
    // $host="sql303.epizy.com:33065";
    // $bd="epiz_33257783_sitio";
    // $usuario="epiz_33257783";
    // $contrasenia="HjLUwKSf9iySZ1K";

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

