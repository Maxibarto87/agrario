<?php
//Se agrego conexion a la base de datos
    $dbname ="agraria";
    $servidor ="localhost";
    $user ="root";
    $password ="";  


try  

{
    $conexion = new PDO("mysql:host=$servidor;dbname$dbname",$user,$password);
}
catch (PDOException $e)
{
    echo "e " . $e->getMessage();
}