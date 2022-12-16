<?php

    session_start();
    
    if($_POST){

        if(($_POST['usuario']=="Ronytacodev")&&($_POST['contrasenia']=="developer")) {

            $_SESSION['usuario']="ok";
            $_SESSION['nombreUsuario']="Master Rony";
            header('Location:inicio.php');
        } else {
            $mensaje="Error: EL usuario y/o contraseña son incorrectos.";
        }

    }
?>

<!doctype html>
<html lang="en">
  <head>
    <title>Administrador del sitio web</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link rel="stylesheet" href="./css/style.css">

    <!-- google fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400&display=swap" rel="stylesheet">

    <!-- Bootstrap CSS -->
    <!-- <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous"> -->

    <link rel="shortcut icon" href="../img/logo_bookdevs.ico" type="image/x-icon">

    <!-- iconos font-awesome -->
    <script src="https://kit.fontawesome.com/9d0ecd6d4d.js" crossorigin="anonymous"></script>

  </head>
  <body>

        <div class="container">
            <h1>Login Bookdevs</h1>

                <?php if(isset($mensaje)) { ?>
                    <div class="alert">
                        <?php echo $mensaje; ?>
                    </div>
                <?php } ?> 

        <form method="POST">
            <div class="form__group form__div">
                <span><i class="fa-solid fa-user"></i></span>
                <input class="campo" type="text" name="usuario" placeholder="Usuario">
            </div>
            <div class="form__group form__div">
                <span><i class="fa-solid fa-lock"></i></span>
                <input class="campo" type="password" name="contrasenia" placeholder="Contraseña">
            </div>
            <div class="form__group">
                <button type="submit">Iniciar sesión</button>
            </div>
            <div class="form__group__enlace">
                <a class="enlace" href="lastpassword.php">¿Olvidaste tu contraseña?</a>
            </div>
        </form>
        <hr>
        <p>Inicie sesión con su cuenta de redes sociales</p>
        <div class="div__group">
            <a class="redes" href="#"><i class="fa-brands fa-twitter"></i></a>
            <a class="redes" href="#"><i class="fa-brands fa-facebook"></i></a>
        </div>
    </div>

        <!-- <div class="container">
        <div class="row">

        <div class="col-md-4">
            
        </div>
            <div class="col-md-4">
            <br/><br/><br/>
            <div class="card">
                <div class="card-header">
                    Login
                </div>
                <div class="card-body">  

                    <form method="POST">

                    <div class = "form-group">
                        <label >Usuario</label>
                        <input type="text" class="form-control" name="usuario"  placeholder="Escribe tu usuario">
                    </div>

                    <div class="form-group">
                        <label >Contraseña:</label>
                        <input type="password" class="form-control" name="contrasenia"  placeholder="Escribe tu contraseña">
                    </div>

                    <button type="submit" class="btn btn-primary">Iniciar sesión</button>

                    </form>                    
        
                </div>
            </div>
                
            </div>
            
        </div>
    </div> -->
      
  </body>
</html>