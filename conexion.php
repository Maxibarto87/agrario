<?php
// Se agrega conexion a la base de datos
$dbname = "agraria";
$servidor = "localhost";
$user = "root";
$password = "";

try {
    $conexion = new PDO("mysql:host=$servidor;dbname=$dbname;charset=utf8", $user, $password);
    $conexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    echo "Error de conexion: " . $e->getMessage();
}
?>