<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ContatoController extends Controller
{
    public function contatos(){
        var_dump($_POST);
        //passando o titulo via array associativo
        return view('site.contato',['titulo'=>'Contato']);
    }
}
