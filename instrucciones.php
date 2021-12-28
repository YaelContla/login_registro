<?php session_start();


if (isset($_SESSION['email'])) {
    require 'views/instrucciones.view.php';
} else {
    header('Location: login.php');
}
?>