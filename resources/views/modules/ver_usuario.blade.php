@extends('layouts/main')
@section('contenido')
    <!-- Contenedor principal -->
    <div class="container">
        <!-- Fila centrada en el contenido -->
        <div class="row justify-content-center">
            <!-- Columna de tamaño medio (8 columnas) -->
            <div class="col-md-8 mt-5">
                <!-- Tarjeta con sombra y bordes redondeados -->
                <div class="card shadow p-3 h-100" style="border-radius: 25px;">
                    <!-- Encabezado de la tarjeta -->
                    <div class="card-header text-center">
                        <!-- Título en negrita -->
                        <h2 class="fw-bold">Informacion del usuario</h2>
                    </div>
                    <!-- Cuerpo de la tarjeta -->
                    <div class="card-body">
                        <!-- Lista de grupo con información del usuario -->
                        <ul class="list-group">
                            <!-- Elemento de lista activo con nombre del usuario -->
                            <li class="list-group-item active" aria-current="true"><strong>Nombre: </strong> {{ $usuario->name }}</li>
                            <!-- Elemento de lista con correo electrónico del usuario -->
                            <li class="list-group-item"><Strong>Correo Electronico: </Strong> {{ $usuario->email }}</li>
                            <!-- Elemento de lista con fecha de nacimiento del usuario -->
                            <li class="list-group-item"><strong>Fecha de nacimiento: </strong> {{ $usuario->fecha_nacimiento }}</li>
                            <!-- Elemento de lista con la edad calculada a partir de la fecha de nacimiento -->
                            <li class="list-group-item"><Strong>Edad: </Strong> {{ \Carbon\Carbon::parse($usuario->fecha_nacimiento)->age }} años</li>
                            <!-- Elemento de lista centrado con enlace para regresar a la página de inicio -->
                            <li class="list-group-item text-center"><a href="{{ route('Vistas-inicio') }}" class="btn btn-outline-danger btn-lg"><i class="fa-solid fa-rotate-left"></i> Regresar</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
