<!doctype html>
<html lang="en">
  <head>
    <title>¿Olvidaste tu contraseña?</title>
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
            <h1 class="title_lastpassword">¿Olvidaste tu contraseña?</h1>

                <?php if(isset($mensaje)) { ?>
                    <div class="alert">
                        <?php echo $mensaje; ?>
                    </div>
                <?php } ?> 

        <form method="POST">
            <p>Introduce tu usuario y email para solicitar un cambio de contraseña</p>
            <div class="form__group form__div">
                <span><i class="fa-solid fa-user"></i></span>
                <input class="campo" type="text" name="usuario" placeholder="Usuario">
            </div>
            <div class="form__group form__div">
                <span><i class="fa-solid fa-envelope"></i></span>
                <input class="campo" type="email" name="email" placeholder="Introduce tu email">
            </div>
            <div class="form__group">
                <button type="submit">Cancelar</button>
            </div>
            <div class="form__group">
                <button type="submit">Solicitar</button>
            </div>
        </form>
        <hr>
    </div>
      
  </body>
</html>