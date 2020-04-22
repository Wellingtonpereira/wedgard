<?php

namespace App\Http\Controllers;

use Alert;
use App\Mail\Contact;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class ContactController extends Controller
{
    public function send( Request $request )
    {

        $data = $request->all();
        Mail::to('contato@wedgard.com')->send(new Contact( $data ));

        Alert::success('Em breve estarei entrando em contato! ', 'Mensagem enviada com sucesso!')->persistent("Obrigado :)");
        return redirect('/');

    }
}
