<?php

use App\Http\Controllers\EndPointControllers;
use App\Http\Controllers\UsuariosController;
use App\Http\Controllers\Vistas;
use Illuminate\Support\Facades\Route;

Route::controller(Vistas::class)->group(function(){
    Route::get('/','index')->name('Vistas-inicio');
    Route::get('/usuario/{id}','ver_usuario')->name('Vistas-usuario');
    Route::get('/edit-usuario/{id}','edit_usuario')->name('Vistas-edit-usuario');
    Route::get('/delete-usuario/{id}','delete_usuario')->name('Vistas-delete-usuario');
});
Route::controller(UsuariosController::class)->group(function (){
    Route::post('/store-usuario','store_usuario')->name('Usuarios-store');
    Route::put('/update-usuario/{id}','update_usuario')->name('Usuarios-update');
    Route::delete('destroy-usuario/{id}','destroy_usuario')->name('Usuarios-delete');
});
Route::controller(EndPointControllers::class)->group(function (){
    Route::get('/busqueda/{nombre}','busqueda_nombre')->name('EndPoint-nombre');
});