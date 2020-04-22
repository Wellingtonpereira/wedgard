<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Mail\ComercialEsporte;
use Illuminate\Support\Facades\Mail;
use App\PrimeiroContatoClienteEsporte;

class EmailComercialController extends Controller
{
    public function index(){
        $retorno = null;
        return view('formularios/comercial/index', compact('retorno'));
    }

    public function store( Request $request ){

        $data = $request->all();

        $retorno = 'Credêncial incorreta';
        if ( $data['chave'] == 'sisbraEsporte1987' ){

            unset( $data['chave']);
            Mail::to($data['email'])->send(new ComercialEsporte( ));
            PrimeiroContatoClienteEsporte::create( $data );

            $retorno = 'E-mail enviado para    ' . $data['name'] ;

        }
        
        return view('formularios/comercial/index', compact('retorno'));
    }
}
