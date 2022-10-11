<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class IndexController extends Controller
{
    public function index(){
        //passando o titulo via array associativo

        $motivo_contatos=['1'=>'Dúvida','2'=>'Elogio','3'=>'Reclamação'];
        return view('site.index',['titulo'=>'Home','motivo_contatos'=>$motivo_contatos]);
    }
}
