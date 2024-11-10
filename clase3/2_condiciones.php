<?php
$age = -1;
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <div>
        <?php
        if ($age >= 18) {
            echo 'Eres mayor de edad';
        } else if ($age <= 0) {
            echo 'Aun no naces';
        } else {
            echo 'Eres menor de edad';
        }
        echo '<br>';

        echo 'Tienes ' . $age . ' años';
        ?>
    </div>

</body>

</html>