<?php
$name = $_POST['name'];
$mail = $_POST['mail'];
$phone = $_POST['phone'];
$message = $_POST['message'];

$header = 'From: ' . $mail . " \r\n";
$header .= "X-Mailer: PHP/" . phpversion() . " \r\n";
$header .= "Mime-Version: 1.0 \r\n";
$header .= "Content-Type: text/plain";

$message = "Este mensaje fue enviado por: " . $name . " \r\n";
$message .= "Su e-mail es: " . $mail . " \r\n";
$message .= "Teléfono de contacto: " . $phone . " \r\n";
$message .= "Mensaje: " . $_POST['message'] . " \r\n";
$message .= "Enviado el: " . date('d/m/Y', time());

$para = 'sanhuezamauricio.a@gmail.com';
$asunto = 'Contacto enviado desde la web nueva';

mail($para, $asunto, utf8_decode($message), $header);
echo '<div class="container"style="height: 100vh;width: 100vw;background-color: #58C9E2;display: flex;justify-content: center;align-items: center;"><div class="cuadro" style="padding: 2.5rem;border-radius: 30px;background-color: #ffffff;box-shadow: rgba(100, 100, 111, 0.2) 0px 7px 29px 0px;"><h3 style="font-size: 3rem;color: green ;">¡Mensaje enviado exitosamente!</h3></div></div>';
echo "<script>setTimeout(\"location.href='index.html#contacto'\",1800)</script>";
?>