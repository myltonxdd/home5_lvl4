<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ArticulosController;
use App\Http\Controllers\ProductosController;
use App\Http\Controllers\EdadesController;
use App\Http\Controllers\Home5Controller;
use App\Http\Controllers\PersonasController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::controller(ArticulosController::class)->group(function(){
    Route::get('articulos', "index");
    Route::get('articulos/juegos', "juegos");
    Route::get('articulos/juegos/vestimenta', "vestimenta");
});

Route::controller(EdadesController::class)->group(function(){
    Route::get('edades/', "index");
    Route::get('edades/cachorros', "cachorros");
    Route::get('edades/cachorros/adultos', "adultos");
});

Route::controller(ProductosController::class)->group(function(){
    Route::get('productos/', "index");
    Route::get('productos/comida', "comida");
    Route::get('productos/comida/{adultos}', "adultos");
});

Route::controller(PersonasController::class)->group(function(){
    Route::get('personas', function(){
        view("plantilla");
    });
    Route::get('personas/create', "create");
    Route::delete('personas/{id}', "destroy");
    Route::put('personas/{id}', "update");
});

Route::controller(Home5Controller::class)->group(function(){
    Route::get('home5', "index");

});
