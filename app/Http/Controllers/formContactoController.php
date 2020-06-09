<?php

namespace JQDeveloper\Http\Controllers;

use Illuminate\Support\Facades\Mail;

use Session;
use Redirect;
use Illuminate\Http\Request;
use JQDeveloper\Mail\MensajeRecibido;
class formContactoController extends Controller
{
    public function store(Request $request){
        $msg = request()-> validate([
            'name'=> 'required',
            'email' => 'required|email',
            'subject' => 'required',
            'content' => 'required|min:5'
        
        ]);
        
        Mail::to('jqdeveloper2.0@gmail.com')->queue(new MensajeRecibido($msg));
      
       return back()->with('status', 'Recibimos tu mensaje te contactare a la brevedad.');
    }
}
