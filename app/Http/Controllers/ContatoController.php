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
        $contato->motivo_contatos=$request->input('motivo_contatos');
        $contato->mensagem=$request->input('mensagem');
        //recuperanto a listagem de motivo contato no bd via classe

        $motivo_contatos=MotivoContato::all();

        return view('site.contato',['titulo'=>'contato','motivo_contatos'=>$motivo_contatos]);
    }

    public function salvar(Request $request){
        $regras=['nome'=>'required|min:3|max:40|unique:site_contatos',
        'telefone'=>'required|min:12',
        'email'=>'required|email',
        'motivo_contatos'=>'required',
        'mensagem'=>'required|min:10|max:500'];
        $feedback=['nome.required'=> 'O nome é obrigatório','nome.min'=>'o nome tem q ter no minimo 3 caracteres',
        'nome.max'=>'o nome tem que ter no maximo 40 caracteres','nome.unique'=>'o nome precisa ser unico','email.email'=>'o email informado não é válido'
        ,'required'=>'O :attribute é obrigatório'];
        $request->validate($regras,$feedback);
        SiteContato::create($request->all());
        $request->save();
        // redirecionamneto de  rota
        return redirect()->route('site.index');


    }
}
