<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class Vistas extends Controller
{
    public function index()
    {
        // Título para la página
        $titulo = 'inicio';

        // Obtener todos los usuarios de la base de datos
        $usuario = User::all();

        // Renderizar la vista 'inicio' y pasar datos
        return view('inicio', compact('titulo', 'usuario'));
    }

    public function ver_usuario($id)
    {
        // Título para la página
        $titulo = 'Ver usuario';

        // Buscar un usuario por su ID
        $usuario = User::where('id', $id)->first();

        // Renderizar la vista 'ver_usuario' y pasar datos
        return view('modules/ver_usuario', compact('titulo', 'usuario'));
    }

    public function edit_usuario($id)
    {
        // Título para la página
        $titulo = 'Editar usuario';

        // Buscar un usuario por su ID
        $usuario = User::where('id', $id)->first();

        // Renderizar la vista 'edit_usuario' y pasar datos
        return view('modules/edit_usuario', compact('titulo', 'usuario'));
    }

    public function delete_usuario($id)
    {
        // Título para la página
        $titulo = 'Eliminar usuario';

        // Buscar un usuario por su ID
        $usuario = User::where('id', $id)->first();

        // Renderizar la vista 'delete_usuario' y pasar datos
        return view('modules/delete_usuario', compact('titulo', 'usuario'));
    }
}
