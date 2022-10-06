<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUnidadeTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('unidades', function (Blueprint $table) {
            $table->id();
            $table->string('unidade',50);
            $table->string('descricao',30);
            $table->timestamps();
            //relacionamnento 1:N
            //add o relacionamento com a tabela produto


        });
         //add o relacionamento com a tabela produto
         Schema::table('produtos',function(Blueprint $table){
            //$table->unsignedBigInteger('unidade_id');
            $table->foreign('unidade_id')->references('id')->on('unidades');//[table]_[coluna]_foreing
         });
            //add o relacionamneto com a tabela produto_detalhe

         Schema::table('produto_detalhes',function(Blueprint $table){
            $table->unsignedBigInteger('unidade_id');
            $table->foreign('unidade_id')->references('id')->on('unidades');
         });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {       //removendo cada uma das integridades relacionais(constraints)
            //add o relacionamneto com a tabela produto_detalhe
            Schema::table('produto_detalhes',function(Blueprint $table){
                //remover a fk
                $table->dropForeign('produto_detalhes_unidade_id_foreign');//[table]_[coluna]_foreing
                //remover a coluna
                $table->dropColumn('unidade_id');
             });


             Schema::table('produtos',function(Blueprint $table){
                //remover a fk
                $table->dropForeign('produtos_unidade_id_foreign');//[table]_[coluna]_foreing
                //remover a coluna
                $table->dropColumn('unidade_id');
             });
    }
}

