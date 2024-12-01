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
        $datos = usuarios::first();
        return view('secciones/portafolio', compact('datos'));

    }
    function nuevostelefono(Request $request){
        //dd($request->all());
    $usuario = usuarios::find($request->input('id'));

    if ($usuario) {
        // Actualizar el teléfono
        $usuario->Telefono = $request->input('telefono');
        $usuario->save();

        $datos = usuarios::first();
        return view('secciones/portafolio', compact('datos'));
    } else {

        return redirect()->back()->withErrors(['mensaje' => 'Usuario no encontrado.']);
    }
}
    function nuevosUbicacion(Request $request){
    //dd($request->all());
    $usuario = usuarios::find($request->input('id'));

        if ($usuario) {
            // Actualizar el teléfono
            $usuario->Ubicacion = $request->input('ubicacion');
            $usuario->save();
            $datos = usuarios::first();
            return view('secciones/portafolio', compact('datos'));
        } else {
            return redirect()->back()->withErrors(['mensaje' => 'Usuario no encontrado.']);
        }
    }
}