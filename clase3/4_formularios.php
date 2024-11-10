<?php
if (!empty($_POST)) {
    echo $_POST['email'];
    echo '<br>';
    echo $_POST['password'];
} else {
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
    <form method="post" action="">
        <div>
            <label for="email">Correo</label>
            <input type="text" name="email" />
        </div>

        <div>
            <label form="password">Contraseña</label>
            <input type="text" name="password" />
        </div>

        <div>
            <button type="submit">Enviar formulario</button>
        </div>
    </form>
</body>

</html>