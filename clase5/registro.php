<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h1>Registrar usuario</h1>
    <form method="post" action="controllers/registroController.php">

        <div>
            <label for="nombre">Nombre</label>
            <input type="text" name="nombre">
        </div>
        <div>
            <label for="email">Correo</label>
            <input type="email" name="email">
        </div>
        <div>
            <label for="password">Contraseña</label>
            <input type="password" name="password" />
        </div>

        <div>
            <button type="submit">Crear usuario</button>
        </div>
    </form>
</body>

</html>