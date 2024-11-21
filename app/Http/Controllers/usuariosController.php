<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\usuarios;
class usuariosController extends Controller
{
    function form_registro(){
        return view('secciones/formulario');
    }

    function datos_registro(Request $request){
        $usuario = new usuarios();
        $usuario->Nombre = $request->input('nombre');
        $usuario->Apellido = $request->input('apellido');
        $usuario->Edad = $request->input('edad');
        $usuario->Genero = $request->input('genero');
        $usuario->Correo = $request->input('correo');
        $usuario->save();
        return view('secciones/portafolio', compact('usuario'));

    }
}
