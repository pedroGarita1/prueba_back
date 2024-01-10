<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;

class UsuariosController extends Controller
{
    public function store_usuario(Request $request)
    {
        ValidateController::store_usuario_validate($request);
        $usuario = new User();
        $usuario->name = $request->nombre;
        $usuario->email = $request->email;
        $usuario->fecha_nacimiento = $request->fecha_nacimiento;
        $usuario->save();
        return redirect()->back();
    }
    public function update_usuario(Request $request, $id){
        ValidateController::update_usuario_validate($request);
        $usuario = User::find($id);
        $usuario->name = $request->nombre;
        $usuario->email = $request->email;
        $usuario->fecha_nacimiento = $request->fecha_nacimiento;
        $usuario->save();
        return redirect()->route('Vistas-inicio');
    }
    public function destroy_usuario($id){
        $usuario = User::find($id);
        $usuario->delete();
        return redirect()->route('Vistas-inicio');
    }
}
