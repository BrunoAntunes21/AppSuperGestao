<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
//utilizando SoftDeletes
use Illuminate\Database\Eloquent\SoftDeletes;
class Fornecedor extends Model
{   use SoftDeletes;

    //configuração da tabela q o orm vai inserir as informaçoes via Fornecedor model
    protected $table='fornecedores';
    //configuração dos campos que utilizaremos no metodo create
    protected $fillable=['nome','site','uf','contato','email'];
}
