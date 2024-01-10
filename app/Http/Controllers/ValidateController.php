<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ValidateController extends Controller
{
    public static function store_usuario_validate($request)
    {
        $request->validate(
            [
                'nombre' => 'required',
                'email' => 'required | email | unique:App\Models\User,email',
                'fecha_nacimiento' => 'required | date'
            ],
            [
                'nombre.required' => 'El campo es requerido',
                'email.required' => 'El correo electronico es requerido',
                'email.email' => 'El campo tiene que ser un correo electronico valido',
                'email.unique' => 'El correo electronico ingresado ya esta registrado',
                'fecha_nacimiento.required' => 'El campo es requerido',
                'fecha_nacimiento.date' => 'El campo tiene que ser una fecha',
            ]
        );
    }
}
