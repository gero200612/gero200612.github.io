<?php
$nombre = $_POST['nombre'];
$appelido = $_POST['appelido'];
$email = $_POST['email'];
$mensaje = $_POST['mensaje'];

$header = 'From: ' . $email . " \r\n";
$header .= "X-Mailer: PHP/" . phpversion() . " \r\n";
$header .= "Mime-Version: 1.0 \r\n";
$header .= "Content-Type: text/plain";

$mensaje = "Este mensaje lo envio:" . $nombre . "\r\n";
$mensaje = "su mail es:" . $email . "\r\n";
$mensaje = "enviado el:" . date('d/m/Y', time());

$para = 'infokfrental@gmail.com';
$asunto = 'KFRENTAL';

mail($para, $asunto, utf8_decode($mensaje), $header);

header("Location:kfrental.html");
?>

