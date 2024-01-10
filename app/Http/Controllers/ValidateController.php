<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ValidateController extends Controller
{
    public static function store_usuario_validate($request)
    {
        // Validar la solicitud utilizando las reglas definidas
        $request->validate(
            [
                'nombre' => 'required',
                'email' => 'required | email | unique:App\Models\User,email',
                'fecha_nacimiento' => 'required | date'
            ],
            [
                // Mensajes de error personalizados para las reglas de validación
                'nombre.required' => 'El campo es requerido',
                'email.required' => 'El correo electrónico es requerido',
                'email.email' => 'El campo debe ser un correo electrónico válido',
                'email.unique' => 'El correo electrónico ingresado ya está registrado',
                'fecha_nacimiento.required' => 'El campo es requerido',
                'fecha_nacimiento.date' => 'El campo debe ser una fecha',
            ]
        );
    }

    public static function update_usuario_validate($request)
    {
        // Validar la solicitud utilizando las reglas definidas
        $request->validate(
            [
                'nombre' => 'required',
                'email' => 'required | email',
                'fecha_nacimiento' => 'required | date'
            ],
            [
                // Mensajes de error personalizados para las reglas de validación
                'nombre.required' => 'El campo es requerido',
                'email.required' => 'El correo electrónico es requerido',
                'email.email' => 'El campo debe ser un correo electrónico válido',
                'fecha_nacimiento.required' => 'El campo es requerido',
                'fecha_nacimiento.date' => 'El campo debe ser una fecha',
            ]
        );
    }
}
