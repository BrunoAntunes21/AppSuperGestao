<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use \App\User;

class LoginController extends Controller
{//configuração do controller de login

    public function index(Request $request){
        $erro='';
        if($request->get('erro')== 1){
            $erro="Usuario ou senha não existente";
        }
        if($request->get('erro')== 2){
            $erro="Necessario realizar login para ter acesso a pagina";
        }

        return view ('site.login',['titulo'=>'Login','erro'=>$erro]);

    }
    public function autenticar(Request $request){
        //regras de validação
        $regras=['usuario'=>'email','senha'=>'required'];

        //as mensagens  de feed de validação
        $feedback=['usuario.email'=>' o campo (Email) é Obrigadorio','senha.required'=>'O campos Senha é obrigadorio'];

        //se não pelo validade
        $request->validate($regras, $feedback );
        //recuperamos os paramentros do formulario
        $email=$request->get('usuario');
        $password=$request->get('senha');

             //iniciar o model user
       $user=new User;
       $usuario=$user->where('email',$email)
       ->where('password',$password)
       ->get()
       ->first();
       if(isset($usuario->name)){
        //iniciando uma seção de usuario no php
        session_start();
        $_SESSION['nome']=$usuario->name;
        $_SESSION['email']=$usuario->email;

        return redirect()->route('app.home');

       }else{
        return redirect()->route('site.login',['erro'=>1]);
       }

    }
    public function sair(){
        //metodo que destroi a seção de usuario
        session_destroy();
        return redirect()->route('site.index');

    }

}
