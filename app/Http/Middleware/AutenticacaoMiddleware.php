<?php

namespace App\Http\Middleware;

use Closure;

class AutenticacaoMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next,$metodo_autenticacao,$perfil)
    {   // ususario possuir acesso a rota
        echo $metodo_autenticacao.' - '.$perfil.'<br>';

        if($metodo_autenticacao=='padrao'){
            echo '<br>Verificacao o usuario no banco de dados';
        }
        if($metodo_autenticacao=='ldap'){
            echo 'Verificacao o usuario no AD'.'<br>';
        }
        if(false){
            return $next($request).'<br>';
        }
        else{
        return Response('Acesso negado! Rota exige Autenticação !!!');}
    }
}
