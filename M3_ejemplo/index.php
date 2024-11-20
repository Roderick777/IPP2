<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <form method="post" action="controllers/usuarioController.php">
        <div>
            <label>Correo</label>
            <input name="email" type="email" />
        </div>
        <div>
            <label>Contraseña</label>
            <input name="password" type="password" />
        </div>

        <button type="submit">Enviar</button>
    </form>
</body>

</html>