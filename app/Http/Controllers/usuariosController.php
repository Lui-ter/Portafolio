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
            $usuario->Ciudad = $request->input('ubicacion');
            $usuario->save();
            $datos = usuarios::first();
            return view('secciones/portafolio', compact('datos'));
        } else {
            return redirect()->back()->withErrors(['mensaje' => 'Usuario no encontrado.']);
        }
    }

    function nuevaFecha(Request $request){
        //dd($request->all());
        $usuario = usuarios::find($request->input('id'));

        if ($usuario) {
            // Actualizar la fecha del titulo
            $usuario->Fecha_Titulo1 = $request->input('finalizacion');
            $usuario->save();
            $datos = usuarios::first();
            return view('secciones/portafolio', compact('datos'));
        } else {
            return redirect()->back()->withErrors(['mensaje' => 'Usuario no encontrado.']);
        }
    }

    function nuevoTitulo(Request $request){
        //dd($request->all());
        $usuario = usuarios::find($request->input('id'));
        if ($usuario) {
            // Actualizar el titulo
            $usuario->Titulo1 = $request->input('titulo');
            $usuario->save();
            $datos = usuarios::first();
            return view('secciones/portafolio', compact('datos'));
        } else {
            return redirect()->back()->withErrors(['mensaje' => 'Usuario no encontrado.']);
        }
    }
    function nuevoExperiencia(Request $request){
      //dd($request->all());
      $usuario = usuarios::find($request->input('id'));
      if ($usuario) {
          // Actualizar el titulo
          $usuario->Experiencia = $request->input('experiencia');
          $usuario->save();
          $datos = usuarios::first();
          return view('secciones/portafolio', compact('datos'));
      } else {
          return redirect()->back()->withErrors(['mensaje' => 'Usuario no encontrado.']);
      }
    }
    function nuevaImagen(Request $request){
        $usuario = usuarios::find($request->input('id'));
        if($usuario){
            // Obtener la imagen del formulario
            $img = $request->file('imagen');
            // Covertirlo a binario
            $imagen = file_get_contents($img);
            // Guardar o actualizar el campo de la base de datos
            $usuario->imagen = $imagen;
            $usuario->save();
            $datos = usuarios::first();
            return view('secciones/portafolio', compact('datos'));
        } else {
            return redirect()->back()->withErrors(['mensaje' => 'Usuario no encontrado.']);
        }
    }
    function eliminar(Request $request){
    $usuario = usuarios::find($request->input('id'));
    if ($usuario) {
        
        $usuario->delete();
        return view('secciones/index');
    } else {
        // Redirigir con un mensaje de error si el usuario no se encuentra
        return redirect()->back()->withErrors(['mensaje' => 'Usuario no encontrado.']);
    }
    }

}