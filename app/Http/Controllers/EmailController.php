<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Mail;

class EmailController extends Controller
{
    public function contact(Request $request){
        
        $subject = "Cotización de Flete";
        $for = env('MAIL_USERNAME');

        $validatedData = $request->validate([
            'nombre' => 'required|string|max:100',
            'email' => 'required|email|max:100',
            'telefono' => 'required|numeric',
            'mensaje' => 'required|string|max:1000'
        ],[
            'nombre.required' => 'El nombre es requerido',
            'nombre.string' => 'El nombre debe ser un texto',
            'email.required' => 'El email es requerido',
            'email.email' => 'El email debe tener formato de correo',
            'telefono.required' => 'El telefono es requerido',
            'telefono.numeric' => 'El telefono debe ser númerico',
            'mensaje.required' => 'El mensaje es requerido',
        ]);

        Mail::send('email',$request->all(), function($msj) use($subject,$for, $request){
        
            $msj->from($request->email, $request->nombre);
            $msj->subject($subject);
            $msj->to($for);

        });

        return redirect()->back()->withSuccess('Tu mensaje ha sido enviado correctamente. Pronto te contactaremos.');

    }
}
