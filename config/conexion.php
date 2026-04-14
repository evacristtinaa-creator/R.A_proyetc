<?php
$host = "localhost";
$db   = "intranet_colegio"; // <--- AQUÍ ESTABA EL ERROR. Cambia 'colegio_ra' por 'intranet_colegio'
$user = "root";
$pass = ""; // O tu contraseña si tienes una

try {
    $conexion = new PDO("mysql:host=$host;dbname=$db", $user, $pass);
    $conexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    echo "Error de conexión: " . $e->getMessage();
}
?>