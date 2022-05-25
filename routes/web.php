<?php

use Illuminate\Support\Facades\Route;
///Controlador 
use App\Http\Controllers\PruebasController;
use App\Http\Controllers\JuegoController;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/


Route::get('/', [JuegoController::class,'show' ]);
Route::get('template', [PruebasController::class,'fun_template' ]);
Route::get('jaja/{valor}',[PruebasController::class,'fun_demo'])->name("Ruta_Parametros");
Route::get('yolo',[PruebasController::class,'fun_index' ]);
Route::post('loggin',[PruebasController::class,'fun_loggin' ])-> name("Redireccion");
Route::post('work',[PruebasController::class,'fun_work' ])-> name("Work");
Route::get('formulario',[PruebasController::class,'fun_formulario' ])-> name("Formulario");


///////rutas de juegos


Route::get('Juegos',[JuegoController::class,'show' ])-> name("Juegos");
Route::get('Juegos/crear',[JuegoController::class,'fun_create' ])-> name("JuegosCrear");
Route::post('Pruebas',[JuegoController::class,'fun_pruebas' ])-> name("Pruebas");
Route::post('Create',[JuegoController::class,'create' ])-> name("Create");
Route::post('destroy',[JuegoController::class,'destroy' ])-> name("Destroy");
Route::post('Edit',[JuegoController::class,'edit' ])-> name("Edit");
Route::get('Juegos/editar{id}',[JuegoController::class,'fun_edit' ])-> name("JuegosEditar");


