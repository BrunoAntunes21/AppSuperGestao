<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TesteController extends Controller
{ public function teste (int $p1,int $p2,String $nome){
   // echo 'A soma de p1 e p2 é :'.($p1+$p2);
    //a view ainda precisa ser criada
    //  return view('site.teste',['x'=>$p1,'y'=>$p2,'nome'=>$nome]);//array associativo
    //via metodo compact
    return view('site.teste',compact('p1','p2','nome'));
    return view('site.teste ')->with('p1',$p1 )->with('p2',$p2);
}
}
