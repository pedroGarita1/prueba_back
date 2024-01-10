@extends('layouts/main')
@section('contenido')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8 mt-5">
                <div class="card shadow p-3 h-100" style="border-radius: 25px;">
                    <div class="card-header text-center">
                        <h2 class="fw-bold">Informacion del usuario</h2>
                    </div>
                  <div class="card-body">
                    <ul class="list-group">
                        <li class="list-group-item active" aria-current="true"><strong>Nombre: </strong> {{ $usuario->name }}</li>
                        <li class="list-group-item"><Strong>Correo Electronico: </Strong> {{ $usuario->email }}</li>
                        <li class="list-group-item"><strong>Fecha de nacimiento: </strong> {{ $usuario->fecha_nacimiento }}</li>
                        <li class="list-group-item"><Strong>Edad: </Strong> {{ \Carbon\Carbon::parse($usuario->fecha_nacimiento)->age }} años</li>
                        <li class="list-group-item text-center"><a href="{{ route('Vistas-inicio') }}" class="btn btn-outline-danger btn-lg"><i class="fa-solid fa-rotate-left"></i> Regresar</a></li>
                      </ul>
                  </div>
                </div>
            </div>
        </div>
    </div>
@endsection