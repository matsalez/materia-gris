<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Mail;

class EmailController extends Controller
{

    public function contact(Request $request){
        $subject = "Nuevo Contacto desde la Web";
        $for = "mgcowork@gmail.com";
        $tel = $request->tel;
        $email = $request->email;
        $msg = $request->msg;
        Mail::send('email',$request->all(), function($msj) use($subject,$for,$tel,$msg,$email){
            $msj->from("mgcowork@gmail.com","Prueba desde mgcowork");
            $msj->subject($subject);
            $msj->to($for);
        });
        return redirect()->back();
    }
}
