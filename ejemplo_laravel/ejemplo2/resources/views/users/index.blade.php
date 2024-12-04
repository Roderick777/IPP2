<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <title>Lista de Usuarios</title>
</head>

<body>
    <div class="container mt-5">

        <div class="row">
            <div class="col-md-8">
                <h1>Lista de Usuarios</h1>

                <!-- <div class="d-flex justify-content-end align-items-center">
                    <a class="btn btn-primary" href="../register">Registrar usuario</a>
                </div> -->
                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Nombre</th>
                            <th>Correo Electrónico</th>
                            <th>Fecha de Registro</th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse($users as $user)
                        <tr>
                            <td>{{ $user->id }}</td>
                            <td>{{ $user->name }}</td>
                            <td>{{ $user->email }}</td>
                            <td>{{ $user->created_at->format('d-m-Y') }}</td>
                        </tr>
                        @empty
                        <tr>
                            <td colspan="4" class="text-center">No hay usuarios registrados.</td>
                        </tr>
                        @endforelse
                    </tbody>
                </table>
            </div>
            <div class="col-md-4">
                <h1>Registro de Usuario</h1>
                <form id="user-create-form" action="{{ route('register.store') }}" method="POST">
                    @csrf
                    <!-- Nombre -->
                    <div class="mb-3">
                        <label for="name" class="form-label">Nombre</label>
                        <input type="text" name="name" id="name" class="form-control" placeholder="Tu nombre" value="{{ old('name') }}" required>
                    </div>

                    <!-- Correo electrónico -->
                    <div class="mb-3">
                        <label for="email" class="form-label">Correo Electrónico</label>
                        <input type="email" name="email" id="email" class="form-control" placeholder="Tu correo" value="{{ old('email') }}" required>
                    </div>

                    <!-- Contraseña -->
                    <div class="mb-3">
                        <label for="password" class="form-label">Contraseña</label>
                        <input type="password" name="password" id="password" class="form-control" placeholder="Tu contraseña" required>
                    </div>

                    <!-- Confirmar Contraseña -->
                    <div class="mb-3">
                        <label for="password_confirmation" class="form-label">Confirmar Contraseña</label>
                        <input type="password" name="password_confirmation" id="password_confirmation" class="form-control" placeholder="Repite tu contraseña" required>
                    </div>

                    <!-- Botón de Enviar -->
                    <button type="submit" class="btn btn-primary">
                        <div class="d-flex justify-content-center align-items-center gap-2">
                            <div id="submit-loader" class="spinner-border" role="status"></div>
                            <div id="submit-text">Registrar</div>
                        </div>
                    </button>
                </form>
            </div>
        </div>
    </div>
    <script src="{{ asset('js/users.js') }}"></script>
</body>

</html>