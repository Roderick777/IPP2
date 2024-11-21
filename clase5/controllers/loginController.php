<?php
require_once '../class/autoload.php';

$usuario = new Usuario();
$usuarioLogeado = $usuario->iniciarSesion($_POST['email'], $_POST['password']);

if (!empty($usuarioLogeado)) {
    // Redirigir usando una ruta absoluta
    header("Location: ../home.php");
    exit();
} else {
    echo 'Usuario no encontrado';
}
