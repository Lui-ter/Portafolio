<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\usuariosController;

// Ruta que dirige hacia el inicio de la pagina donde desplegara las demas funciones
Route::get('/', function () {
    return view('secciones/index');
});

// Ruta que dirige hacia el controlador para abrir la vista en donde se mostrara el formulario
route::get('/formulario',[usuariosController::class,'form_registro']);

// Ruta que recibe los datos enviados del formulario a travez del metodo POST para procesar los datos en el controlador
route::post('/datos_formulario',[usuariosController::class,'datos_registro']);

Route::get('/portafolio', function () {
    return view('secciones/papeleria');
});
// ruta para recibir todos los nuevos campos del usuario
Route::post('/recibirTelefono', [usuariosController::class,'nuevostelefono']);
//  ruta para recibir el campo de ubicacion para usuario
Route::post('/recibirUbicacion', [usuariosController::class,'nuevosUbicacion']);
//  ruta para recibir el campo de año finalizacion para usuario
Route::post('/recibirFecha', [usuariosController::class, 'nuevaFecha']);
//  ruta para recibir el campo del titulo del usuario
Route::post('/recibirTitulo', [usuariosController::class, 'nuevoTitulo']);
// Ruta para recibir el campo de experiencia para el usuario
Route::post('/recibirExperiencia', [usuariosController::class, 'nuevoExperiencia']);