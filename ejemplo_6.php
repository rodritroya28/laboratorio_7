
<?php
try{
    $connection = new  PDO ("mysql:host=localhost;dbname=Rodrigo","root","");
    $connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    echo "Conectado exitosamente con PDO";

}catch (PDOExeption $e){
    echo "La conexion fallo: ".$e->getMessage();

}



?>