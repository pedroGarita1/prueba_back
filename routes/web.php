<?php

use App\Http\Controllers\UsuariosController;
use App\Http\Controllers\Vistas;
use Illuminate\Support\Facades\Route;

Route::controller(Vistas::class)->group(function(){
    Route::get('/','index')->name('Vistas-inicio');
    Route::get('/usuario/{id}','ver_usuario')->name('Vistas-usuario');
});
Route::controller(UsuariosController::class)->group(function (){
    Route::post('/store-usuario','store_usuario')->name('Usuarios-store');
    Route::put('/update-usuario/{id}','update_usuario')->name('Usuarios-update');
    Route::delete('delete-usuario/{id}','delete_usuario')->name('Usuarios-delete');
});