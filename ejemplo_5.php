<?php
// cadena de conexion al servidor
$connection = new mysqli("localhost","root","","Rodrigo");

if(!$connection) {
    die( "la conexion fallo: " .$connection->connect_error);


}
echo "Conectado exitosamente con objetos";
// Cerrar la conexion
mysqli_close($connection);


?>