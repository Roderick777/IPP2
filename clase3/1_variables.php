<?php
$mensaje = 'Hola'; // cadena caracteres - string
$resultado = 7 + 9; // 1,000 fallaria
$listado = ['Manzana', 'Pera', 'Naranja', 'Fresa'];
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php
    echo $mensaje;
    ?>
    <div>
        <?php
        echo $resultado;
        ?>
    </div>

    <div>
        <?php
        var_dump($listado);
        ?>
    </div>

    <div>
        <?php
        echo $listado[0];
        echo $listado[1];
        echo $listado[2];
        ?>

    </div>
</body>

</html>