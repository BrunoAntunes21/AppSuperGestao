<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;

class AlterTableSiteContatosAddFkMotivosContatos extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    //add a coluna motivo_contatos_id

    {   Schema::table('site_contatos',function(Blueprint $table){
        $table->unsignedBigInteger('motivo_contatos_id');

    });
        //atribuindo motivo_contato para a nova coluna motivo_contato_id
        DB::statement('update site_contatos set  motivo_contatos_id = motivo_contato');
        //criando  a fk(foreig key)
        /*Schema::table('site_contatos',function(Blueprint $table){
            $table->foreign('motivos_contatos_id')->references('id')->on('motivo_contatos');
            $table->dropColumn('motivo_contato');
        });*/
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {   // criar a coluna motivo_contato e removendo a fk
        Schema::table('site_contato',function (Blueprint $table){
            $table->interger('motivo_contato');
            $table->dropForeign('site_contatos_motivo_contatos_id_foreign');
        });
        //atribuindo motivo_contato_id para a nova coluna motivo_contato
        DB::statement('update site_contatos set  motivo_contatos_id = motivo_contato');
        //criando  a fk(foreig key)
        Schema::table('site_contatos',function(Blueprint $table){
            $table->dropColumn('motivo_contato_id');
        });
    }
}
