@extends('layouts.main')
@section('contenido')
<div class="container-fluid">
    <div class="row justify-content-center">
        <div class="col-sm-12 col-md-6 col-lg-6 col-xl-8 mt-5">
            <div class="card shadow p-3 h-100" style="border-radius: 25px;">
                <div class="card-header text-center">
                    <h2 class="fw-bold">Tabla General Usuarios</h2>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table id="tablaPrueba" class="table table-hover text-center align-middle table-sm table-responsive-sm display responsive nowrap" width="100%">
                            <thead>
                                <tr>
                                    <th scope="col">#</th>
                                    <th scope="col">Nombre</th>
                                    <th scope="col">Correo</th>
                                    <th scope="col">Fecha de nacimiento</th>
                                    <th scope="col">Ver</th>
                                    <th scope="col">Editar</th>
                                    <th scope="col">Eliminar</th>
                                </tr>
                            </thead>
                            <tbody>
                                @php
                                    $contador = 1;
                                @endphp
                                @foreach ($usuario as $item)
                                <tr>
                                    <td>{{ $contador ++ }}</td>
                                    <td>{{ $item->name }}</td>
                                    <td>{{ $item->email }}</td>
                                    <td>{{ \Carbon\Carbon::parse($item->fecha_nacimiento)->format('M/d/Y') }}</td>
                                    <td><a href="{{ route('Vistas-usuario', ['id'=>$item->id]) }}" class="btn btn-outline-secondary"><i class="fa-solid fa-eye"></i></a></td>
                                    <td><a href="{{ route('Vistas-edit-usuario', ['id'=>$item->id]) }}" class="btn btn-outline-primary"><i class="fa-solid fa-pen-to-square"></i></a></td>
                                    <td><a href="{{ route('Vistas-delete-usuario', ['id'=>$item->id]) }}" class="btn btn-outline-danger"><i class="fa-solid fa-delete-left"></i></a></td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-sm-12 col-md-6 col-lg-6 col-xl-4 mt-5">
            <div class="card shadow p-3 h-100" style="border-radius: 25px;">
                <div class="card-header text-center">
                    <h2 class="fw-bold">Agregar Usuario</h2>
                </div>
              <div class="card-body">
                <p class="card-text">
                    <form action="{{ route('Usuarios-store') }}" method="post">
                        @method('POST') @csrf
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="form-floating mt-3">
                                    <input type="text" class="form-control bg-transparent @error('nombre') is-invalid @enderror" id="id_nom_usuario" placeholder="name" name="nombre" value="{{ old('nombre') }}">
                                    <label for="id_nom_usuario" class="">Nombre completo</label>
                                    @error('nombre')
                                        <div id="basic-addon2" class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>
                                <div class="form-floating mt-3">
                                    <input type="email" class="form-control bg-transparent @error('email') is-invalid @enderror" id="id_nom_usuario" placeholder="name" name="email" value="{{ old('email') }}">
                                    <label for="id_nom_usuario" class="">Correo Electronico</label>
                                    @error('email')
                                        <div id="basic-addon2" class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>
                                <div class="form-floating mt-3">
                                    <input type="date" class="form-control bg-transparent @error('fecha_nacimiento') is-invalid @enderror" id="id_nom_usuario" placeholder="name" name="fecha_nacimiento" value="{{ old('fecha_nacimiento') }}">
                                    <label for="id_nom_usuario" class="">Fecha de nacimiento</label>
                                    @error('fecha_nacimiento')
                                        <div id="basic-addon2" class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-md-12 text-center mt-3">
                                <hr>
                                <button class="btn btn-success">Registrar usuario</button>
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
@section('js')
    <script src="{{ asset('js/dataTable.js') }}"></script>
@endsection