<?php session_start();

if(isset($_SESSION['email'])) {
    header('Location: instrucciones.php');
    //header('Location: contenido.php');
    

} else{
    header('Location: registrate.php');
    //header('Location: login.php');
    //header('Location: contenido.php');

    //echo "Entré en contenido.php desde index";
}

?>