<?php

use Illuminate\Database\Seeder;
use App\Fornecedor;

class FornecedorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $fornecedor=new Fornecedor();
        $fornecedor->nome='Fornecedor 100';
        $fornecedor->site='fornecedor100.com';
        $fornecedor->uf='sp';
        $fornecedor->contato='0000-0000';
        $fornecedor->email='contato@fornecedor1.com';
        $fornecedor->save();
        //o metodo create(atenção para o atributo fillable da classe)
        Fornecedor::create(['nome'=>'fornecedor 200','site'=>'fornecedor200.com.br','uf'=>'RS','email'=>'contato@fornecedor.com.br' ]);
        //insert
        DB::table('fornecedor')->insert(['nome'=>'fornecedor 300','site'=>'fornecedor300.com','uf'=>'RS','email'=>'contato@fornecedor200.com.br']);

    }
}
