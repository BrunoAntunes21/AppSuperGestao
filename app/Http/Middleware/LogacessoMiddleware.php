<?php

namespace App\Http\Middleware;

use Closure;
use App\LogAcesso;
class LogacessoMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {   //$request-manipular
        return $next($request);
        //$response-manipular
        //recuperando o ip da maquina
        $ip=$request->server->get('REMOTE_ADDR');
        //recuperando a rota
        $rota=$request->getRequesturi();
        LogAcesso::create(['log'=>"ip $ip requisitou a rota $rota"]);


    }
}
