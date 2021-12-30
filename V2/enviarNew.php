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

$para = 'sebastian.sanhueza.t@usach.cl';
$asunto = 'Contacto enviado desde la web nueva';

mail($para, $asunto, utf8_decode($message), $header);
echo '<div class="container"style="height: 100vh; width: 100vw; display: flex; justify-content: center; align-items: center;"> <div class="cuadro" style="padding: 2.5rem; border-radius: 30px; box-shadow: rgba(100, 100, 111, 0.2) 0px 7px 29px 0px;"> <h3 style=" color: green ;">¡Mensaje enviado exitosamente!</h3> </div> </div>';
echo "<script>setTimeout(\"location.href='index.html#NosotrosSlide'\",1800)</script>";
// echo "<script>alert("enviado PHP");</script>";
// if ($email) {
// }
// header("Location:index.html#NosotrosSlide");
// echo '<script type="text/javascript">',
//      'alert("enviado php");',
//      '</script>';
?>