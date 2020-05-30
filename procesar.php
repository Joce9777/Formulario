<?php
$nombre = $_GET["nombre"];
$asunto = $_GET["asunto"];
$mensaje = $_GET["mensaje"]; 

echo "<h2> informacion recibida desde PHP </h2>";
echo "El nombre recibido es". $nombre. "<br/>";
echo "El Asunto recibido es". $asunto. "<br/>";
echo "El mensaje recibido es". $mensaje. "<br/>";
?>