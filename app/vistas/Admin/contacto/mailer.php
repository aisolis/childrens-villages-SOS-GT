<?php
ob_start();
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;
use PHPMailer\PHPMailer\SMTP;

require_once $_SERVER['DOCUMENT_ROOT']."/demo/public/admin/mailer/Exception.php";
require_once $_SERVER['DOCUMENT_ROOT'].'/demo/public/admin/mailer/PHPMailer.php';
require_once $_SERVER['DOCUMENT_ROOT'].'/demo/public/admin/mailer/SMTP.php';


// Instantiation and passing `true` enables exceptions
$mail = new PHPMailer(true);

$to = $_POST['correoto'];
$from = $_POST['correode'];
$mensaje = $_POST['mensaje'];


try {
    //Server settings
    $mail->SMTPDebug = SMTP::DEBUG_SERVER;                      // Enable verbose debug output
    $mail->isSMTP();                                            // Send using SMTP
    $mail->Host       = 'smtp.gmail.com';                    // Set the SMTP server to send through
    $mail->SMTPAuth   = true;                                   // Enable SMTP authentication
    $mail->Username   = 'swordslol323@gmail.com';                     // SMTP username
    $mail->Password   = 'luciauwu';                               // SMTP password
    $mail->SMTPSecure = 'tls';         // Enable TLS encryption; `PHPMailer::ENCRYPTION_SMTPS` encouraged
    $mail->Port       = 587;                                    // TCP port to connect to, use 465 for `PHPMailer::ENCRYPTION_SMTPS` above

    //Recipients
    $mail->setFrom($from, 'Soy su voz - contacto');
    $mail->addAddress($to, '');     // Add a recipient
    // Content
    $mail->isHTML(true);                                  // Set email format to HTML
    $mail->Subject = 'Solicitud de Contacto';
    $mail->Body    = $mensaje;
    $mail->AltBody = $mensaje;

    $mail->send();
    echo 'Message has been sent';
    redirect('Admin/contacto');
} catch (Exception $e) {
    echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
}
ob_end_flush();
?>