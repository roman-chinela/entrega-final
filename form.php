<?php

$nombre = $_POST['nombre'];
$mail = $_POST['mail'];
$mensaje = $_POST['textarea'];

$para = 'drschiavoni.vascular@gmail.com';
$asunto = 'Mail enviado desde la web';

mail($para, $asunto, utf8_decode($mensaje))

header('Location: index.html');

?>