<?php
// error_reporting(E_ALL); // Reportar todos los errores
// ini_set('display_errors', 1); // Mostrar errores en la salida
// ini_set('display_startup_errors', 1); // Mostrar errores durante la carga inicial

require_once '../class/autoload.php';

$usuario = new Usuario();
$usuarioAuth = $usuario->iniciarSesion($_POST["email"], $_POST["password"]);

// print_r($usuarioAuth);
if (!empty($usuarioAuth)) {
    echo 'Sesión iniciada';
    $baseUrl = (isset($_SERVER['HTTPS']) ? "https" : "http") . "://{$_SERVER['HTTP_HOST']}/IPP2/M3_ejemplo/";

    // Redirigir usando una ruta absoluta
    header("Location: " . $baseUrl . "index.php?autenticado=true");
    exit();
} else {
    echo 'Usuario no encontrado';
}
