<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ContatoController extends Controller
{
    public function contatos(Request $request){

        //passando o titulo via array associativo
        echo '<pre>';
        print_r($request->all());
        echo '<pre>';
        echo $request->input('nome');
        echo '<br>';
        echo $request->input('email');
        echo '<br>';

        return view('site.contato',['titulo'=>'Contato']);
    }
}
