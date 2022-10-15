<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\MotivoContato;

class IndexController extends Controller
{
    public function index(){
        //passando o titulo via array associativo
        //recuperanto a lostagem de motivo contato no bd via classe

        $motivo_contatos=MotivoContato::all();

        return view('site.index',['titulo'=>'Home','motivo_contatos'=>$motivo_contatos]);
    }
}
