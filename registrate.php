<?php session_start();

$caracteres = 'abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXY#$!&';
$longitud = 11;

//echo $password;

if (isset($_SESSION['email'])) {
    header('Location: index.php');
}

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    
    $num_empleado = $_POST['num_empleado'];
    $nombre = filter_var(strtolower($_POST['nombre']), FILTER_SANITIZE_STRING);
    $apellido_paterno = filter_var(strtolower($_POST['apellido_paterno']), FILTER_SANITIZE_STRING);
    $apellido_materno = filter_var(strtolower($_POST['apellido_materno']), FILTER_SANITIZE_STRING);
    $email = $_POST['email'];
    $area_adscripcion = $_POST['area_adscripcion'];
    $sexo = $_POST['sexo'];
    //$password = $_POST['password'];

    $errores = '';

    if ( empty($num_empleado) or empty($nombre) or empty($apellido_paterno) or
         empty($apellido_materno) or empty($email) or empty($area_adscripcion) or empty($sexo)){
        $errores .= '<li>Por favor completa todos los campos correctamente</li>';

    } else {
        try {
            $conexion = new PDO('mysql:host=localhost;dbname=information', 'root', '');
        } catch (PDOException $e) {
            echo "Error: " . $e->getMessage();
        }

        $statement = $conexion->prepare('SELECT * FROM usuarios WHERE num_empleado = :num_empleado LIMIT 1 ');
        $statement->execute(array(':num_empleado' => $num_empleado));
        $resultado = $statement->fetch();
         
        if ($resultado != false) {
            $errores .= '<li>El usuario ya existe</li>';
        }

        $contra = (substr(str_shuffle($caracteres), 0, $longitud));

        //$password = hash('sha512', $password);

        //echo "$nombre . $apellido_paterno . $apellido_materno . $email . $area_adscripcion . $sexo . $password";

    }

    if ($errores == ''){
        $statement = $conexion -> prepare('INSERT INTO usuarios (id, num_empleado, nombre, 
        apellido_paterno, apellido_materno, email, area_adscripcion, sexo, contra)
        
        VALUES (null, :num_empleado, :nombre, :apellido_paterno, :apellido_materno, 
        :email, :area_adscripcion, :sexo, :contra )');

        $statement->execute(array(':num_empleado'=>$num_empleado, ':nombre'=>$nombre, 
        ':apellido_paterno'=>$apellido_paterno, 'apellido_materno'=>$apellido_materno, 
        ':email'=>$email, ':area_adscripcion'=>$area_adscripcion, ':sexo'=>$sexo, ':contra'=>$contra

        //$errores .='<li>En breve, tendras un mail con las instrucciones a seguir para tu inicio de sesión</li>';

        ));

        $para_usuario = $email;
        $subject = 'Consulta tu contraseña';
        $message_body = 'Hola ' . $nombre . '
        su contraseña es: ' . $contra . 
        'por favor haga clic en el siguiente link: http://localhost/login_registro/login.php'; 
        sendEmail();
        //echo "FIN";

        //header('Location: login.php');
    }

}

require 'views/registrate.view.php';


?>