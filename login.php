<?php session_start();

if (isset($_SESSION['email'])) {
    header('Location: index.php');
}

$errores = '';

if($_SERVER['REQUEST_METHOD'] == 'POST'){
    
    $email = $_POST['email'];
    $contra = $_POST['contra'];

    //echo "$email - $contra";

    try {
        $conexion = new PDO('mysql:host=localhost;dbname=information', 'root', '');
    } catch (PDOException $e) {
        echo "Error:" . $e->getMessage();
    }
    

    $statement = $conexion->prepare('SELECT * FROM usuarios WHERE email = :email AND contra = :contra');

    $statement->execute(array( 
        ':email' => $email,
        ':contra' => $contra 
    ));

    $resultado = $statement->fetch();
    //var_dump($resultado);
    if($resultado !== false){
        $_SESSION['email'] = $email;
        header('Location: index.php');
        //echo "Info Correcta";
    } else {
        
        $errores.='<li>Correo o Contraseña son Incorrectos</li>';
    }

}

//echo "$email . $contra";

require 'views/login.view.php';



?>