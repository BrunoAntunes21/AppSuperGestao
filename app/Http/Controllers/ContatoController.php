<?php

namespace App\Http\Controllers;

use App\SiteContato;
use Illuminate\Http\Request;

class ContatoController extends Controller
{
    public function contatos(Request $request){

        /*passando o titulo via array associativo
        echo '<pre>';
        print_r($request->all());
        echo '<pre>';
        echo $request->input('nome');
        echo '<br>';
        echo $request->input('email');
        echo '<br>';
        $contato=new SiteContato();
        $contato->nome=$request->input('nome');
        $contato->telefone=$request->input('telefone');
        $contato->email=$request->input('email');
        $contato->motivo_contato=$request->input('motivo_contato');
        $contato->mensagem=$request->input('mensagem');

        print_r($contato->getAttributes());

        //saving the data on the db
        $contato->save();*/
        $contato=new SiteContato();
        $contato->create($request->all());
        print_r($contato->getAttributes());



        return view('site.contato',['titulo'=>'Contato']);
    }
}
