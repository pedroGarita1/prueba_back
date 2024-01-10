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
}
