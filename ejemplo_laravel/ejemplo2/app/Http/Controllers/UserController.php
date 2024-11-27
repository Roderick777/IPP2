<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rules;

class UserController extends Controller
{
    public function index()
    {
        // Obtener todos los usuarios
        $users = User::all();

        // Pasar los usuarios a la vista
        return view('users.index', compact('users'));
    }

    // Muestra el formulario de registro
    public function create()
    {
        return view('register');
    }

    // Maneja el registro del usuario
    public function store(Request $request)
    {
        // Validar los datos
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|unique:users,email',
            'password' => ['required', 'confirmed', Rules\Password::defaults()],
            'role' => 'nullable|string|in:user,admin',
        ]);

        // Crear el usuario
        User::create([
            'name' => $validated['name'],
            'email' => $validated['email'],
            'password' => Hash::make($validated['password']),
            'role' => $validated['role'] ?? 'user', // Rol por defecto: usuario
        ]);

        // Redirigir con éxito
        return redirect()->route('register.create')->with('success', 'Usuario registrado con éxito');
    }
}
