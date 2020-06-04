<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Mail;
use Illuminate\Http\Request;
use App\Mail\MensajeResivido;
class formContactoController extends Controller
{
    public function store(Request $request){
        $msj = request()-> validate([
            'name'=> 'required',
            'email' => 'required|email',
            'subject' => 'required',
            'content' => 'required|min:5'
        
        ]);
      //  Mail::to('jorgeql@hotmail.es')->queue(new MensajeResivido($msj));
       // return new MensajeResivido($msj);
       // return 'Mensaje enviado';
       return back()->with('status', 'Recibimos tu mensaje');
    }
}
