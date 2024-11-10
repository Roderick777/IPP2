<?php
class Auto
{
    private $marca;
    private $color;
    private $modelo;

    public function __construct($marca, $color, $modelo)
    {
        $this->marca = $marca;
        $this->color = $color;
        $this->modelo = $modelo;
    }

    public function mostrarDatos()
    {
        echo $this->marca . ' - ' . $this->modelo;
    }

    public function acelerar() {}

    public function frenar() {}
}

$miAuto = new Auto('Mazda', ' blanco', '3');
$miAuto->mostrarDatos();

$miAuto2 = new Auto('Suzuki', 'negro', 'Baleno');
$miAuto2->mostrarDatos();
require_once '8_include.php';
