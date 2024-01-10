@extends('layouts.main')
@section('contenido')
<div class="container">
    <!-- Sección principal: Editar Usuario -->
    <div class="row justify-content-center">
        <div class="col-sm-12 col-md-6 col-lg-6 col-xl-4 mt-5">
            <div class="card shadow p-3 h-100" style="border-radius: 25px;">
                <!-- Encabezado de la tarjeta -->
                <div class="card-header text-center">
                    <!-- Título de la tarjeta -->
                    <h2 class="fw-bold">Editar Usuario</h2>
                </div>
                <!-- Cuerpo de la tarjeta -->
                <div class="card-body">
                    <p class="card-text">
                        <!-- Formulario para editar un usuario existente -->
                        <form action="{{ route('Usuarios-update', ['id'=>$usuario->id]) }}" method="post">
                            @method('PUT') @csrf
                            <div class="row">
                                <div class="col-lg-12">
                                    <!-- Campos del formulario para nombre, correo y fecha de nacimiento -->
                                    <div class="form-floating mt-3">
                                        <input type="text" class="form-control bg-transparent @error('nombre') is-invalid @enderror" id="id_nom_usuario" placeholder="name" name="nombre" value="{{ $usuario->name }}">
                                        <label for="id_nom_usuario" class="">Nombre completo</label>
                                        @error('nombre')
                                            <div id="basic-addon2" class="invalid-feedback">
                                                {{ $message }}
                                            </div>
                                        @enderror
                                    </div>
                                    <div class="form-floating mt-3">
                                        <input type="email" class="form-control bg-transparent @error('email') is-invalid @enderror" id="id_nom_usuario" placeholder="name" name="email" value="{{ $usuario->email }}">
                                        <label for="id_nom_usuario" class="">Correo Electrónico</label>
                                        @error('email')
                                            <div id="basic-addon2" class="invalid-feedback">
                                                {{ $message }}
                                            </div>
                                        @enderror
                                    </div>
                                    <div class="form-floating mt-3">
                                        <input type="date" class="form-control bg-transparent @error('fecha_nacimiento') is-invalid @enderror" id="id_nom_usuario" placeholder="name" name="fecha_nacimiento" value="{{ $usuario->fecha_nacimiento }}">
                                        <label for="id_nom_usuario" class="">Fecha de Nacimiento</label>
                                        @error('fecha_nacimiento')
                                            <div id="basic-addon2" class="invalid-feedback">
                                                {{ $message }}
                                            </div>
                                        @enderror
                                    </div>
                                </div>
                                <!-- Sección de botones: Actualizar y Regresar -->
                                <div class="col-md-12 text-center mt-3">
                                    <hr>
                                    <div class="row">
                                        <!-- Botón para actualizar el usuario -->
                                        <div class="col-md-6">
                                            <button class="btn btn-success">Actualizar usuario</button>
                                        </div>
                                        <!-- Enlace para regresar a la página de inicio -->
                                        <div class="col-md-6">
                                            <a href="{{ route('Vistas-inicio') }}" class="btn btn-outline-danger"><i class="fa-solid fa-rotate-left"></i> Regresar</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </p>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
