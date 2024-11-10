<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php
    function sumar($num1, $num2)
    {
        return $num1 + $num2;
    }

    function createText()
    {
        $texto = 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam egestas nisl non congue cursus. Mauris blandit interdum magna vel faucibus. Vivamus mattis nisi quis ex tincidunt, sit amet tristique urna fringilla. Ut porttitor magna ipsum, ac varius nibh tempor in. Curabitur maximus convallis sagittis. Mauris tincidunt vitae libero in varius. Quisque eleifend ullamcorper mauris, eget suscipit nunc tempus aliquet. Nam ullamcorper hendrerit dignissim. Nulla gravida mi quis urna consequat, quis bibendum erat mattis. Aliquam efficitur ultrices lectus, in accumsan dui tincidunt quis. Duis scelerisque congue odio non porta. Pellentesque efficitur enim nisl, a venenatis ipsum gravida quis. Aenean lacinia quam vel tortor luctus convallis. Phasellus posuere ipsum ultricies, tincidunt nunc quis, viverra nulla. Nunc posuere arcu augue, placerat sollicitudin augue consequat in. Nam eu eros erat.';
        return $texto;
    }

    echo sumar(1, 4);
    echo sumar(7, 2);

    echo createText();
    ?>
</body>

</html>