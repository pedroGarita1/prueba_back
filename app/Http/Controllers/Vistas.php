<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class Vistas extends Controller
{
    public function index(){
        $titulo = 'inicio';
        $usuario = User::all();
        return view('inicio', compact('titulo','usuario'));
    }
    public function ver_usuario($id){
        $titulo = 'Ver usuario';
        $usuario = User::where('id',$id)->first();
        return view('modules/ver_usuario',compact('titulo','usuario'));
    }
    public function edit_usuario($id){
        $titulo = 'Editar usuario';
        $usuario = User::where('id',$id)->first();
        return view('modules/edit_usuario',compact('titulo','usuario'));
    }
    public function delete_usuario($id){
        $titulo = 'Eliminar usuario';
        $usuario = User::where('id',$id)->first();
        return view('modules/delete_usuario',compact('titulo','usuario'));
    }
}
