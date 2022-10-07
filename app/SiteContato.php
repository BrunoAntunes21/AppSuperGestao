<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class SiteContato extends Model
{   //configurando o model para poder ussar o metodo fill
    protected $fillable=['nome','telefone','email','motivo_contato','mensagem'];
}
