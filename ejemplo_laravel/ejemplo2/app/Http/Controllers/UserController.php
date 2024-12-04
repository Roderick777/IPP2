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
        $name = $request->input('name');
        $email = $request->input('email');
        $password = $request->input('password');

        // Crear el usuario
        $user = User::create([
            'name' => $name,
            'email' => $email,
            'password' => Hash::make($password),
            'role' => 'user', // Rol por defecto: usuario
        ]);

        return response()->json($user);
    }
}
