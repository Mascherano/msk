<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Mail;

class EmailController extends Controller
{
    public function contact(Request $request){
        
        $subject = "Cotización de Flete";
        $for = env('MAIL_USERNAME');
        dd(env('MAIL_USERNAME'));
        Mail::send('email',$request->all(), function($msj) use($subject,$for, $request){
            
            $msj->from($request->email, $request->nombre);
            $msj->subject($subject);
            $msj->to($for);
        });

        return redirect()->back();

    }
}
