<?php

use App\Http\Controllers\UsuariosController;
use App\Http\Controllers\Vistas;
use Illuminate\Support\Facades\Route;

// Rutas para el controlador de Vistas
Route::controller(Vistas::class)->group(function(){
    // Ruta para mostrar la página de inicio
    Route::get('/','index')->name('Vistas-inicio');

    // Ruta para ver detalles de un usuario
    Route::get('/usuario/{id}','ver_usuario')->name('Vistas-usuario');

    // Ruta para mostrar el formulario de edición de un usuario
    Route::get('/edit-usuario/{id}','edit_usuario')->name('Vistas-edit-usuario');

    // Ruta para mostrar el formulario de eliminación de un usuario
    Route::get('/delete-usuario/{id}','delete_usuario')->name('Vistas-delete-usuario');
});

// Rutas para el controlador de usuarios
Route::controller(UsuariosController::class)->group(function (){
    // Ruta para almacenar un nuevo usuario
    Route::post('/store-usuario','store_usuario')->name('Usuarios-store');

    // Ruta para actualizar la información de un usuario
    Route::put('/update-usuario/{id}','update_usuario')->name('Usuarios-update');

    // Ruta para eliminar un usuario
    Route::delete('destroy-usuario/{id}','destroy_usuario')->name('Usuarios-delete');
});