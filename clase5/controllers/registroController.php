<?php
require_once '../class/autoload.php';

$usuario = new Usuario();
$usuario->__set('nombre', $_POST['nombre']);
$usuario->__set('email', $_POST['email']);
$usuario->__set('password', $_POST['password']);
$usuario->insert();
?>
<script>
    alert('Usuario creado exitosamente');
    window.location.href = '../registro.php'
</script>