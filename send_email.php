<?php


//Import PHPMailer classes into the global namespace
//These must be at the top of your script, not inside a function
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

//Load Composer's autoloader
require 'vendor/autoload.php';

function sendEmail($para_usuario, $subject, $message_body) {

    $mail = new PHPMailer(true);                              // Passing `true` enables exceptions

    try {

       

    $mail->isSMTP();                                      // Set mailer to use SMTP
    $mail->Host = 'smtp.gmail.com';  // Specify main and backup SMTP servers
    $mail->SMTPAuth = true;                               // Enable SMTP authentication
    $mail->Username = 'contlayael@gmail.com';                 // SMTP username
    $mail->Password = 'greenevilday15';                           // SMTP password
    $mail->SMTPSecure = 'tls';                            // Enable TLS encryption, `ssl` also accepted
    $mail->Port = 587;                                    // TCP port to connect to



    //Recipients

    $mail->setFrom('contlayael@gmail.com','Contraseña e Instrucciones Examen Inglés');
    $mail->addAddress($para_usuario);

    $mail->isHTML(true);                                  // Set email format to HTML
    $mail->Subject = $subject;
    $mail->Body    = $message_body;



    $mail->send();

    echo 'Correo enviado';

    } catch (Exception $e) {

       echo 'No puedo ser enviado. Mailer Error: ', $mail->ErrorInfo;

    }

}


?>