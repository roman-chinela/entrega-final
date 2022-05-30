<?php

$nombre = $_POST['nombre'];
$mail = $_POST['Email'];
$mensaje = $_POST['textarea'];
$radio = $_POST['respuesta'];

$para = 'romancinalli36@gmail.com';
$asunto = 'Mail enviado desde la web';

mail($para, $asunto, utf8_decode($mensaje,$radio));


header('Location: index.html');

?>