<?php session_start();

//Destruye la sesión
session_destroy();
//La sesión se limpia
$_SESSION = array();

header('Location: login.php');


?>