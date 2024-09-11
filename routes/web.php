<?php

use App\Http\Controllers\ContactoController;
use App\Http\Controllers\NoticiaController;
use App\Models\contacto;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/contacto/{tipo_persona?}',[ ContactoController::class, "formulario"]);
Route::post('/contacto-recibe', [ContactoController::class, "NewContact"]);
Route::get('lista', [ContactoController::class, 'lista']);

Route::resource('noticias', NoticiaController::class);