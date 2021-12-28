<!DOCTYPE html>
<html lang="es">
    
<head>

    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
   
   <!-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
    
    <script src="https://kit.fontawesome.com/e249e076b1.js" crossorigin="anonymous"></script>-->

<!--Fontawesome 4.0 working   https://fontawesome.com/v4.7/icons/-->
    <script src="https://use.fontawesome.com/9a87d3a5c7.js"></script>

    <link rel="stylesheet" href="css/styles.css">
    <!--<link rel="stylesheet" href="css/normalize.css">
    <link rel="stylesheet" href="css/styles.css">-->

    <title>Iniciar Sesion</title>

</head>

<body>

<header class="header">
   <img class="logo1" src="img/uaeh.png" alt="uaeh">
   
    <hr class="border1">
</header>

<div class="contenedor">
    
<h1 class="titulo">Iniciar Sesion</h1>

        <hr class="border2">

        <form action="<?php echo htmlspecialchars ($_SERVER['PHP_SELF']); ?>" method="POST" class="formulario" name="login">
            <div class="form-group">
                <i class="icono izquierda fa fa-user"></i><input type="text" name="email" class="usuario" placeholder="Correo Institucional">
            </div>

            <div class="form-group">
                <i class="icono izquierda fa fa-lock"></i><input type="password" name="contra" class="password_btn" placeholder="Contraseña">
                <i class="submit-btn fa fa-arrow-right" onclick="login.submit()"></i>
            </div>

            <?php if (!empty($errores)): ?>
                <div class="error">
                    <ul>
                        <?php echo $errores; ?>
                    </ul>
                </div>
            <?php endif; ?>    

        </form>

        <p class="texto-registrate">
            ¿Aun no tienes cuenta? 
            <a href="registrate.php">Registrate</a>
        </p>
        
           
</div>

<footer class="pie-pagina">
    <p class="footer-uaeh"></p>
</footer>

<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    
</body>
</html>