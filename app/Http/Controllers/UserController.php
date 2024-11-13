<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\ValidationException;

class UserController extends Controller
{
    // Crear un nuevo usuario
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',      // Asegúrate de usar 'name'
            'email' => 'required|string|email|max:255|unique:users', // Asegúrate de usar 'email'
            'password' => 'required|string|min:8',    // Validación para 'password'
        ]);

        // Crear el usuario
        $user = User::create([
            'name' => $request->name,                 // Se asigna 'name'
            'email' => $request->email,               // Se asigna 'email'
            'password' => Hash::make($request->password), // Se guarda la contraseña de manera segura
        ]);

        // Retornar la respuesta con el usuario creado
        return response()->json(['user' => $user], 201);
    }

    // Consultar todos los usuarios
    public function index()
    {
        $users = User::all();
        return response()->json($users, 200);
    }

    // Consultar un usuario específico
    public function show($id)
    {
        $user = User::findOrFail($id);
        return response()->json($user, 200);
    }

    // Eliminar un usuario
    public function destroy($id)
    {
        $user = User::findOrFail($id);
        $user->delete();
        return response()->json(['message' => 'Usuario eliminado con éxito'], 200);
    }

    // Inicio de sesión
    public function login(Request $request)
    {
        $request->validate([
            'email' => 'required|email',
            'password' => 'required',
        ]);

        $user = User::where('email', $request->email)->first();

        if (!$user || !Hash::check($request->password, $user->password)) {
            throw ValidationException::withMessages([
                'email' => ['Las credenciales proporcionadas son incorrectas.'],
            ]);
        }

        // Genera un token único para la sesión actual
        $token = $user->createToken('token_sesion')->plainTextToken;

        return response()->json(['token' => $token], 200);
    }
}
