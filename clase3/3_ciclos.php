<?php
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
    <h1>
        While
    </h1>
    <?php
    $i = 0;
    $cantidadElementos = count($listado);
    while ($i <= $cantidadElementos) {
        echo $listado[$i];
        $i = $i + 1; // $i++
    }
    ?>

    <h1>
        For
    </h1>
    <?php
    $cantidadElementos = count($listado);
    for ($i = 0; $i <= $cantidadElementos; $i++) {
        echo $listado[$i];
    }
    ?>

    <h1>
        Foreach
    </h1>
    <?php
    foreach ($listado as $elemento) {
        echo $elemento . '<br>';
    }
    ?>
</body>

</html>