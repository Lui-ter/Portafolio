<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class portafolioController extends Controller
{
    function form_registro(){
        return view ('secciones/formulario');
    }
    function datos_registro(Request $request){
        $nombre = $request->input('nombre');
        $apellido = $request->input('apellido');
        $edad = $request->input('edad');
        $genero = $request->input('genero');
        $correo = $request->input('correo');
        $telefono = $request->input('telefono');
        $ubicacion = $request->input('ubicacion');
        $direccion = $request->input('direccion');
        $descripcion = $request->input('descripcion');
        $fechaTitulo = $request->input('fechaTitulo');
        $titulo = $request->input('titulo');
        $experiencia = $request->input('experiencia');
        $imagen = $request->file('imagen');
        $ruta = $imagen->store('images', 'public');
        return view ('secciones/portafolio', compact('nombre', 'apellido', 'edad', 'correo', 'telefono', 'ubicacion', 'direccion', 'descripcion', 'genero', 'titulo', 'experiencia', 'fechaTitulo', 'ruta'));
    }

    function Form_Register(){

    }


}
