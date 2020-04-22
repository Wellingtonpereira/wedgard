<?php

namespace App\Http\Controllers;

use App\Curriculum;
use Illuminate\Http\Request;
use App\Mail\CurriculumMail;
use Illuminate\Support\Facades\Mail;

class CurriculumController extends Controller
{
    
    public function index(){
        $retorno = null;
        return view('formularios/curriculum/index', compact('retorno'));
    }

    public function store( Request $request ){

        $data = $request->all();

        $retorno = 'Credêncial incorreta';
        if ( $data['chave'] == 'sisbraEsporte1987' ){

            unset( $data['chave']);
            Mail::to($data['email'])->send(new CurriculumMail( $data['title'] ));
            Curriculum::create( $data );

            $retorno = 'E-mail enviado para    ' . $data['name'] ;

        }
        
        return view('formularios/curriculum/index', compact('retorno'));
    }
}
