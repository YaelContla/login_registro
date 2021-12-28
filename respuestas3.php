<?php



$pregunta7 = $_POST['answer7'];
$pregunta8 = $_POST['answer8'];
$pregunta9 = $_POST['answer9'];
/*$pregunta13 = $_POST['answer13'];
$pregunta14 = $_POST['answer14'];
$pregunta15 = $_POST['answer15'];
$pregunta16 = $_POST['answer16'];
$pregunta17 = $_POST['answer17'];
$pregunta18 = $_POST['answer18'];
$pregunta19 = $_POST['answer19'];
$pregunta20 = $_POST['answer20'];
$pregunta21 = $_POST['answer21'];
$pregunta22 = $_POST['answer22'];
$pregunta23 = $_POST['answer23'];
$pregunta24 = $_POST['answer24'];
$pregunta25 = $_POST['answer25'];
$pregunta26 = $_POST['answer26'];
$pregunta27 = $_POST['answer27'];
$pregunta28 = $_POST['answer28'];
$pregunta29 = $_POST['answer29'];
$pregunta30 = $_POST['answer30'];
$pregunta31 = $_POST['answer31'];
$pregunta32 = $_POST['answer32'];
$pregunta33 = $_POST['answer33'];
$pregunta34 = $_POST['answer34'];
$pregunta35 = $_POST['answer35'];
$pregunta36 = $_POST['answer36'];
$pregunta37 = $_POST['answers37'];
$pregunta38 = $_POST['answers38'];
$pregunta39 = $_POST['answers39'];
$pregunta40 = $_POST['answers40'];
$pregunta41 = $_POST['answers41'];
$pregunta42 = $_POST['answers42'];*/


$mensaje1 = "";

$puntos1= 0;

$calf0 = "0.0";
$calf1 = "3.34";
$calf2 = "6.67";
$calf3 = "10.00";

//----------------------------- A1-1---------------------------->

if ( ($pregunta1 == 'd1') && ($pregunta2 == 'c2') && ($pregunta3 == 'b3') ) {

    $puntos1 = $puntos1 + 3;

    $mensaje1 ='Obtuviste '. $puntos1 . ' puntos y una calificacion de ' . $calf3;
    

} else if ( ($pregunta1 == 'd1') && ($pregunta2 == 'c2') ) {

    $puntos1 = $puntos1 + 2;

    $mensaje1 ='Obtuviste '. $puntos1 . ' puntos y una calificacion de ' . $calf2;
    
} else if ( ($pregunta1 == 'd1') && ($pregunta3 == 'b3') ) {

    $puntos1 = $puntos1 + 2;

    $mensaje1 ='Obtuviste '. $puntos1 . ' puntos y una calificacion de ' . $calf2;

} else if ( ($pregunta2 == 'c2') && ($pregunta3 == 'b3') ) {

    $puntos1 = $puntos1 + 2;

    $mensaje1 ='Obtuviste '. $puntos1 . ' puntos y una calificacion de ' . $calf2;

}  else if ( ($pregunta1 == 'd1') || ($pregunta2 == 'c2') || ($pregunta3 == 'b3') ) {

    $puntos1 = $puntos1 + 1;

    $mensaje1 ='Obtuviste '. $puntos1 . ' puntos y una calificacion de ' . $calf1;

} else {

    $puntos1;

    $mensaje1 ='Obtuviste '. $puntos1 . ' puntos y una calificacion de ' . $calf0;
}



//echo "Resultado: $mensaje"

require 'views/contenido.view.php';

?>