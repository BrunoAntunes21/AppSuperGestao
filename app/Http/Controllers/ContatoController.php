<?php

namespace App\Http\Controllers;

use App\SiteContato;
use Illuminate\Http\Request;

class ContatoController extends Controller
{
    public function contatos(Request $request){
        $contato=new SiteContato();
        $contato->nome=$request->input('nome');
        $contato->telefone=$request->input('telefone');
        $contato->email=$request->input('email');
        $contato->motivo_contato=$request->input('motivo_contato');
        $contato->mensagem=$request->input('mensagem');

        $motivo_contatos=['1'=>'Dúvida','2'=>'Elogio','3'=>'Reclamação'];


        return view('site.contato',['titulo'=>'Contato','motivo_contatos'=>$motivo_contatos]);
    }

    public function salvar(Request $request){
        $request->validate(['Nome'=>'required|min:3|max:40',
        'telefone'=>'required|min:12',
        'email'=>'required',
        'motivo_contato'=>'required',
        'mensagem'=>'required|min:100|max:500']);
        SiteContato::create($request->all());
    }
}
