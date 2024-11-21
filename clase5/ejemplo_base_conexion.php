<?php

try {
    $conn = new PDO("mysql:host=localhost;dbname=ipp;charset=utf8", "root", '');
} catch (PDOException $e) {
    die("Error de conexión: " . $e->getMessage());
}
