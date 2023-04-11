<?php
// cadena de conexion al servidor la base de datos
$conection = mysqli_connect("localhost","root","","Rodrigo");
// para verificar si existe algun error
if(!$conection){
    die("la conexion fallo: " .mysqli_connect_errot());


}
echo "Conectado exitosamente con procedimientos";
// Cerrar la conexion
mysqli_close($conection);


?>