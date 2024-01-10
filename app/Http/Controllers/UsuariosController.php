<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;

class UsuariosController extends Controller
{
    //Funcion para la creacion de nuevos usuarios
    public function store_usuario(Request $request)
    {
        // Validar la solicitud utilizando el controlador de validación personalizado
        ValidateController::store_usuario_validate($request);

        // Crear una nueva instancia de User (modelo Eloquent)
        $usuario = new User();

        // Asignar valores desde la solicitud a las propiedades del modelo
        $usuario->name = $request->nombre;
        $usuario->email = $request->email;
        $usuario->fecha_nacimiento = $request->fecha_nacimiento;

        // Guardar el nuevo usuario en la base de datos
        $usuario->save();

        // Redirigir de nuevo a la página anterior
        return redirect()->back();
    }

    //Funcion para la actualizacion de un usuario en espesifico
    public function update_usuario(Request $request, $id)
    {
        // Validar la solicitud utilizando el controlador de validación personalizado
        ValidateController::update_usuario_validate($request);

        // Buscar el usuario por su ID
        $usuario = User::find($id);

        // Actualizar las propiedades del usuario con los valores de la solicitud
        $usuario->name = $request->nombre;
        $usuario->email = $request->email;
        $usuario->fecha_nacimiento = $request->fecha_nacimiento;

        // Guardar los cambios en la base de datos
        $usuario->save();

        // Redirigir a la ruta 'Vistas-inicio'
        return redirect()->route('Vistas-inicio');
    }

    //Funcion para la eliminacion de un usuario en espesifico
    public function destroy_usuario($id)
    {
        // Buscar el usuario por su ID
        $usuario = User::find($id);

        // Eliminar el usuario de la base de datos
        $usuario->delete();

        // Redirigir a la ruta 'Vistas-inicio'
        return redirect()->route('Vistas-inicio');
    }
}
