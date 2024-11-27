<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <table class="table table-striped">
        <thead>
            <tr>
                <th>ID</th>
                <th>Título</th>
                <th>Contenido</th>
            </tr>
        </thead>
        <tbody>
            @forelse($notices as $notice)
            <tr>
                <td>{{ $notice->id }}</td>
                <td>{{ $notice->title }}</td>
                <td>{{ $notice->content }}</td>
            </tr>
            @empty
            <tr>
                <td colspan="4" class="text-center">No hay usuarios registrados.</td>
            </tr>
            @endforelse
        </tbody>
    </table>
</body>

</html>