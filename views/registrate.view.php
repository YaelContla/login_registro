<!DOCTYPE html>
<html lang="en">

<head>
    
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <script src="https://use.fontawesome.com/9a87d3a5c7.js"></script>
    <link rel="stylesheet" href="css/styles.css">
    
    <title>Registrate</title>

</head>

<body>

<header class="header">
   <img class="logo1" src="img/uaeh.png" alt="uaeh">
   
    <hr class="border1">
</header>

<div class="contenedor">

<h1 class="titulo">Registro UAEH DiSA</h1>
    
    <hr class="border2">

        <form action="<?php echo htmlspecialchars ($_SERVER['PHP_SELF']); ?>" method="POST" class="formulario" name="login">
            <div class="form-group">
                <i class="icono izquierda fa fa-user-circle"></i><input type="text" name="num_empleado" class="usuario" placeholder="Numero de Empleado">
            </div>

            <div class="form-group">
                <i class="icono izquierda fa fa-user"></i><input type="text" name="nombre" class="usuario" placeholder="Nombre(s)">
            </div>

            <div class="form-group">
                <i class="icono izquierda fa fa-user"></i><input type="text" name="apellido_paterno" class="usuario" placeholder="Apellido Paterno">
            </div>

            <div class="form-group">
                <i class="icono izquierda fa fa-user"></i><input type="text" name="apellido_materno" class="usuario" placeholder="Apellido Materno">
            </div>

            <div class="form-group">
            <!--class="custom-select mr-sm-2"-->
                <i class="icono izquierda fa fa-users"></i><select name="area_adscripcion" class=" usuario ">
                    <option selected>Area de Adscripción</option>
                    <option value="Escuela Preparatoria Número 1">Escuela Preparatoria Número 1</option>
                    <option value="Escuela Preparatoria Número 2">Escuela Preparatoria Número 2</option>
                    <option value="Escuela Preparatoria Número 3">Escuela Preparatoria Número 3</option>
                    <option value="Escuela Preparatoria Número 4">Escuela Preparatoria Número 4</option>
                    <option value="Escuela Preparatoria Número 5">Escuela Preparatoria Número 5</option>
                    <option value="Escuela Preparatoria Número 6">Escuela Preparatoria Número 6</option>
                    <option value="Escuela Preparatoria Número 7">Escuela Preparatoria Número 7</option>
                    <option value="Escuela Superior de Actopan">Escuela Superior de Actopan</option>
                    <option value="Escuela Superior de Apan">Escuela Superior de Apan</option>
                    <option value="Escuela Superior de Atotonilco de Tula">Escuela Superior de Atotonilco de Tula</option>
                    <option value="Escuela Superior de Ciudad Sahagún">Escuela Superior de Ciudad Sahagún</option>
                    <option value="Escuela Superior de Huejutla">Escuela Superior de Huejutla</option>
                    <option value="Escuela Superior de Tepeji del Río">Escuela Superior de Tepeji del Río</option>
                    <option value="Escuela Superior de Tizayuca">Escuela Superior de Tizayuca</option>
                    <option value="Escuela Superior de Tlahuelilpan">Escuela Superior de Tlahuelilpan</option>
                    <option value="Escuela Superior de Zimapán">Escuela Superior de Zimapán</option>
                    <option value="Instituto de Artes (IA)">Instituto de Artes (IA)</option>
                    <option value="Instituto de Ciencias Agropecuarias (ICAp)">Instituto de Ciencias Agropecuarias (ICAp)</option>
                    <option value="Instituto de Ciencias Básicas e Ingeniería (ICBI)">Instituto de Ciencias Básicas e Ingeniería (ICBI)</option>
                    <option value="Instituto de Ciencias de la Salud (ICSa)">Instituto de Ciencias de la Salud (ICSa)</option>
                    <option value="Instituto de Ciencias Económico Administrativas (ICEA)">Instituto de Ciencias Económico Administrativas (ICEA)</option>
                    <option value="Instituto de Ciencias Sociales y Humanidades (ICSHu)">Instituto de Ciencias Sociales y Humanidades (ICSHu)</option>
                    </select>
            </div>
        
            <!--<div class="form-group">
                <i class="icono izquierda fa fa-users"></i><input type="text" name="area_adscripcion" class="usuario" placeholder="Area de Adscripción">
            </div>-->

            <div class="form-check chec">
                <input class="form-check-input" type="radio" name="sexo" id="mujer" value="mujer" checked>
                    <label class="form-check-label" for="mujer" >
                        Mujer
                    </label>
            </div>
                    
            <div class="form-check chec">
                <input class="form-check-input" type="radio" name="sexo" id="hombre" value="hombre">
                    <label class="form-check-label" for="hombre">
                        Hombre
                    </label>
            </div>

            <div class="form-group">
                <i class="icono izquierda fa fa-envelope"></i><input type="mail" name="email" class="password_btn" placeholder="Correo Institucional">
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
            ¿Ya tienes cuenta? 
            <a href="login.php">Iniciar Sesión</a>
        </p>
        
           
</div>

<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    
    
</body>


</html>