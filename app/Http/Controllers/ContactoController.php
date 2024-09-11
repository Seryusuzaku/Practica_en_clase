<?php

namespace App\Http\Controllers;

use App\Models\contacto;
use Illuminate\Http\Request;

class ContactoController extends Controller
{

    
    public function formulario ($tipo_persona = null) {
        return view('formulario-contacto', compact('tipo_persona'));
        // return view('formulario-contacto', ['tipo_persona' => $tipo_persona]);
    }

    public function lista (){
        $mensajes = Contacto::all();
        return view('lista', compact('mensajes'));
        //return view('lista', )    
    }

    public function NewContacto (Request $request) {
    
        $request->validate([
    
            'nombre' => 'required |min: 3 | max:255',
            'correo' => 'required|email',
            'mensaje' => ['required', 'min:10']
        ]);
    
        $contacto = new contacto();
        $contacto->nombre = $request->nombre;
        $contacto->correo = $request->correo;
        $contacto->mensaje = $request->mensaje;
        $contacto->save();
    
        return redirect('/contacto');
    
    }
}
