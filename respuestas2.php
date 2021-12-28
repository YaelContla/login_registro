<?php


$pregunta4 = $_POST['answer4'];
$pregunta5 = $_POST['answer5'];
$pregunta6 = $_POST['answer6'];



$mensaje2 = "";

$puntos2= 0;

$calf0 = "0.0";
$calf1 = "3.34";
$calf2 = "6.67";
$calf3 = "10.00";


//   <!----------------------------- A1-2 ------------------------------------>

if ( ($pregunta4 == 'c4') && ($pregunta5 == 'a5') && ($pregunta6 == 'c6') ) {

    $puntos2 = $puntos2 + 3;

    $mensaje2 ='Obtuviste '. $puntos2 . ' puntos y una calificacion de ' . $calf3;

} else if ( ($pregunta4 == 'c4') && ($pregunta5 == 'a5') ) {

    $puntos2 = $puntos2 + 2;

    $mensaje2 ='Obtuviste '. $puntos2 . ' puntos y una calificacion de ' . $calf2;
    
} else if ( ($pregunta4 == 'c4') && ($pregunta6 == 'c6') ) {

    $puntos2 = $puntos2 + 2;

    $mensaje2 ='Obtuviste '. $puntos2 . ' puntos y una calificacion de ' . $calf2;

} else if ( ($pregunta5 == 'a5') && ($pregunta6 == 'c6') ) {

    $puntos2 = $puntos2 + 2;

    $mensaje2 ='Obtuviste '. $puntos2 . ' puntos y una calificacion de ' . $calf2;

}  else if ( ($pregunta4 == 'c4') || ($pregunta5 == 'a5') || ($pregunta6 == 'c6') ) {

    $puntos2 = $puntos2 + 1;

    $mensaje2 ='Obtuviste '. $puntos2 . ' puntos y una calificacion de ' . $calf1;

} else {

    $puntos2;

    $mensaje2='Obtuviste '. $puntos2 . ' puntos y una calificacion de ' . $calf0;
}


//echo "Resultado: $mensaje"

require 'views/contenido.view.php';

?>