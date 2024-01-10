@extends('layouts.main')
@section('contenido')
<div class="container">
    <!-- Sección principal: Confirmación de eliminación -->
    <div class="row justify-content-center">
        <div class="col-sm-12 col-md-6 col-lg-6 col-xl-8 mt-5">
            <div class="card shadow p-3 h-100" style="border-radius: 25px;">
                <!-- Encabezado de la tarjeta -->
                <div class="card-header text-center">
                    <!-- Alerta de confirmación de eliminación -->
                    <div class="alert alert-danger" role="alert">
                        ¿ Seguro que deseas eliminar al usuario ?
                    </div>
                </div>
                <!-- Cuerpo de la tarjeta -->
                <div class="card-body">
                    <div class="table-responsive">
                        <!-- Tabla para mostrar información del usuario a eliminar -->
                        <table class="table table-hover text-center align-middle table-sm table-responsive-sm display responsive nowrap" width="100%">
                            <thead>
                                <tr>
                                    <th scope="col">id</th>
                                    <th scope="col">Nombre</th>
                                    <th scope="col">Correo</th>
                                    <th scope="col">Fecha de nacimiento</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <!-- Datos del usuario a eliminar -->
                                    <th scope="row">{{ $usuario->id }}</th>
                                    <td>{{ $usuario->name }}</td>
                                    <td>{{ $usuario->email }}</td>
                                    <td>{{ $usuario->fecha_nacimiento }}</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
                <!-- Pie de la tarjeta -->
                <div class="card-footer">
                    <div class="row">
                        <!-- Sección para eliminar al usuario -->
                        <div class="col-md-8 text-center"><h1>Eliminar: </h1></div>
                        <div class="col-md-4">
                            <!-- Formulario para enviar solicitud de eliminación -->
                            <form action="{{ route('Usuarios-delete', ['id'=>$usuario->id]) }}" method="POST">
                                @csrf @method('DELETE')
                                <!-- Botón para confirmar la eliminación -->
                                <button class="btn btn-outline-danger btn-lg"><i class="fa-solid fa-trash"></i></button>
                            </form>
                        </div>
                        <hr>
                        <!-- Sección para regresar a la página de inicio -->
                        <div class="col-md-8 text-center"><h1>Regresar: </h1></div>
                        <div class="col-md-4">
                            <!-- Enlace para regresar a la página de inicio -->
                            <a href="{{ route('Vistas-inicio') }}" class="btn btn-outline-danger btn-lg"><i class="fa-solid fa-rotate-left"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
