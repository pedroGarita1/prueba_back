@extends('layouts.main')
@section('contenido')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-sm-12 col-md-6 col-lg-6 col-xl-8 mt-5">
            <div class="card shadow p-3 h-100" style="border-radius: 25px;">
                <div class="card-header text-center">
                    <div class="alert alert-danger" role="alert">
                        ¿ Seguro que deseas eliminar al usuario ?
                      </div>
                </div>
              <div class="card-body">
                <div class="table-responsive">
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
                                <th scope="row">{{ $usuario->id }}</th>
                                <td>{{ $usuario->name }}</td>
                                <td>{{ $usuario->email }}</td>
                                <td>{{ $usuario->fecha_nacimiento }}</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
                <div class="card-footer">
                    <div class="row">
                        <div class="col-md-8 text-center"><h1>Eliminar: </h1></div>
                        <div class="col-md-4">
                            <form action="{{ route('Usuarios-delete', ['id'=>$usuario->id]) }}" method="POST">
                                @csrf @method('DELETE')
                                <button class="btn btn-outline-danger btn-lg"><i class="fa-solid fa-trash"></i></button>
                            </form>
                        </div>
                    </div>
                </div>
              </div>
            </div>
        </div>
    </div>
</div>
@endsection
