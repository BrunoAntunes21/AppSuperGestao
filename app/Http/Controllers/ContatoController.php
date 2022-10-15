<?php

namespace App\Http\Controllers;

use App\SiteContato;
use Illuminate\Http\Request;
use App\MotivoContato;

class ContatoController extends Controller
{
    public function contatos(Request $request){
        $contato=new SiteContato();
        $contato->nome=$request->input('nome');
        $contato->telefone=$request->input('telefone');
        $contato->email=$request->input('email');
        $contato->motivo_contato=$request->input('motivo_contato');
        $contato->mensagem=$request->input('mensagem');
        //recuperanto a listagem de motivo contato no bd via classe

        $motivo_contatos=MotivoContato::all();

        return view('site.contato',['titulo'=>'contato','motivo_contato'=>$motivo_contatos]);
    }

    public function salvar(Request $request){
        $request->validate(['Nome'=>'required|min:3|max:40|unique:site_contatos',
        'telefone'=>'required|min:12',
        'email'=>'email',
        'motivo_contato'=>'required',
        'mensagem'=>'required|min:100|max:500']);
        SiteContato::create($request->all());
        // redirecionamneto de  rota
        return redirect()->route('site.index');

    }
}
