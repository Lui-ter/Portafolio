<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\portafolioController;

// Ruta que dirige hacia el inicio de la pagina donde desplegara las demas funciones
Route::get('/index', function () {
    return view('secciones/index');
});

// Ruta que dirige hacia el controlador para abrir la vista en donde se mostrara el formulario
route::get('/formulario',[portafolioController::class,'form_registro']);

// Ruta que recibe los datos enviados del formulario a travez del metodo POST para procesar los datos en el controlador
route::post('/datos_formulario',[portafolioController::class,'datos_registro']);

Route::get('/portafolio', function () {
    return view('secciones/papeleria');
});
