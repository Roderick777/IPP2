
<?php
/* @autor Rodrigo González */

// Registrar las clases que deseamos precargar aquí
$classMap = [
    'Database' => __DIR__ . '/database.php',
    'Usuario' => __DIR__ . '/usuario.php',
];

spl_autoload_register(function ($class_name) use ($classMap) {
    if (isset($classMap[$class_name])) {
        require_once $classMap[$class_name];
    }
});
