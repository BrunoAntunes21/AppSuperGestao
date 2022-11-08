<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LoginController extends Controller
{

    public function index(){
        return view ('site.login',['titulo'=>'Login']);
    }
    public function autenticar(Request $request){
        //regras de validação
        $regras=['usuario'=>'email','senha'=>'required'];
        
        //as mensagens  de feed de validação
        $feedback=['usuario.email'=>' o campo (Email) é Obrigadorio','senha.required'=>'O campos Senha é obrigadorio'];
      
        //se não pelo validade
        $request->validate($regras, $feedback );

        print_r($request->all());


    }

}
