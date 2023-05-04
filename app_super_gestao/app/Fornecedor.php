<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Fornecedor extends Model
{
    //o atributo $table vai sempre sobrepor a nomeação automática do eloquent com base no nome do modelo
    protected $table = 'fornecedores';
    protected $fillable = ['nome', 'site', 'uf', 'email'];

    //Recuperar registros do banco com all();
    //php artisan tinker
    // use \App\Fornecedores; 
    // $fornecedores = Fornecedor::all();
}
