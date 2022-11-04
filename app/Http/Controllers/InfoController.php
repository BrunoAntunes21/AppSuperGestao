<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Middleware\LogacessoMiddleware;

class InfoController extends Controller
{   public function __construct()
{
    $this->middleware('log.acesso');

}
    public function Info(){
        return view('site.info',['titulo'=>'Informaçoes']);
    }
}
