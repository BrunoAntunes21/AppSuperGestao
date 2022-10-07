<?php

use App\SiteContato;
use Illuminate\Database\Seeder;

class SiteContatoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        /*
        $contato=new SiteContato();
        $contato->nome='Sistema sg';
        $contato->telefone='(12) 88888-8888';
        $contato->email='contato@sg.com.br';
        $contato->motivo_contato=1;
        $contato->mensagem='seja bem vindo ao sistema super gestão';
        $contato->save();*/

        factory(SiteContato::class,100)->create();


    }
    }


