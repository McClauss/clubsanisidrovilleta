<?php
//Conecto form con el server a trabes de los name
$nombre = $_POST['nombre'];
$mail = $_POST['email'];
$mensaje = $_POST['mensaje'];

//Como funciona en el server
$header = 'From: ' . $mail . "\r\n";
$header .= "X-Mailer:PHP/" . phpversion() . "\r\n";
$header .= "Mime-Version: 1.0 \r\n";
$header .= "Content-Type: text/plain";


//Como me va a llegar el mensaje
$mensaje = "Este mensaje fue enviado por " . $nombre . ",\r\n";
$mensaje .= "Su email es: " . $mail . "\r\n";
$mensaje .= "Mensaje: " . $_POST['mensaje'] . "\r\n";
$mensaje .= "Enviado el " . date('d/m/Y',time());

//A donde van a llegar los mensajes
$para = 'cmhc85@gmail.com';
$asunto = 'Mensaje de Web Club Campestre San Isidro';

mail($para, $asunto, utf8_decode($mensaje),$header);

header('Location:contacto.html');

?>
