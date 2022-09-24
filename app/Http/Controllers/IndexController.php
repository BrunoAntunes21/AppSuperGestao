<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class IndexController extends Controller
{
    public function index(){
        //passando o titulo via array associativo
        return view('site.index',['titulo'=>'Home']);
    }
}
