<?php
$email = '';
$password = '';
if (!empty($_POST)) {
    $email = $_POST['email'];
    $password = $_POST['password'];
}

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
    if (!empty($_POST)) {
    ?>
        <div>
            Tu correo es: <?= $email ?>
            <br />
            Tu clave es: <?= $password ?>
            <a href="5_validaciones.php">volver</a>
        </div>
    <?php
    } else {
    ?>
        <form method="post" action="">
            <div>
                <label>Correo</label>
                <input type="text" name="email" />
            </div>

            <div>
                <label>Contraseña</label>
                <input type="text" name="password" />
            </div>

            <div>
                <button type="submit">Enviar formulario</button>
            </div>
        </form>
    <?php
    }
    ?>
</body>

</html>