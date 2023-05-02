<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Fornecedor extends Model
{
    //o atributo $table vai sempre sobrepor a nomeação automática do eloquent com base no nome do modelo
    protected $table = 'fornecedores';
}
