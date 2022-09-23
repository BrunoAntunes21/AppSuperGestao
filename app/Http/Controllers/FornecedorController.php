<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FornecedorController extends Controller
{
    public function index(){
        $fornecedores=[
            0=>['nome'=>'Fornecedor 1','status'=>'S','cnpj'=>'00.000.000/000.00','ddd'=>'11','telefone'=>'0090-0000'],


            1=>['nome'=>'Fornecedor 2',
            'status'=>'S',
                'cnpj'=>null,
                'ddd'=>'11',
                'telefone'=>'0100-0000'],

                2=>['nome'=>'Fornecedor 3',
                'status'=>'N',
                    'cnpj'=>null,
                    'ddd'=>'85',
                    'telefone'=>'1100-0000'],
                    3=>['nome'=>'Fornecedor 4',
                    'status'=>'N',
                        'cnpj'=>null,
                        'ddd'=>'84',
                        'telefone'=>'1100-0000'],
                        4=>['nome'=>'Fornecedor 5',
                        'status'=>'N',
                            'cnpj'=>null,
                            'ddd'=>'55',
                            'telefone'=>'1100-0000'],
                            5=>['nome'=>'Fornecedor 6',
                            'status'=>'N',
                                'cnpj'=>null,
                                'ddd'=>'89',
                                'telefone'=>'1100-0000']


            ];
            echo  @isset($fornecedores[1]['cnpj'])?'CNPJ informado':'CNPJ não informado <br>';
        return view('app.fornecedor.index',compact('fornecedores'));
    }
}
