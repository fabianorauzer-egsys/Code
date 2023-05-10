<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Fornecedor extends Model
{
    //o atributo $table vai sempre sobrepor a nomeação automática do eloquent com base no nome do modelo
    protected $table = 'fornecedores';
    protected $fillable = ['nome', 'site', 'uf', 'email'];

    // Recuperar registros do banco com all();
    // php artisan tinker
    // use \App\Fornecedores; 
    // $fornecedores = Fornecedor::all();

    // Recuperar registros do banco com all();
    // php artisan tinker
    // use \App\Fornecedores; 
    // $fornecedores = Fornecedor::find(2); 
    // o find busca pela primary key da tabela, que nesse caso é o id. Estou buscando o registro com id 2.
    // caso eu quisesse buscar mais de um registro, eu passaria um array de parametros, exemplo:
    // $fornecedores = Fornecedor::find([1,2]);  
 
    //Recuperar registros do banco com where();
    // >>> use \App\SiteContato;
    // >>> $contatos = SiteContato::where('nome_coluna', 'operador_comparacao', 'valor')->get();
    // $contatos = SiteContato::where('id', '>', 1)->get();  onde o ID for maior do que 1
    // $contatos = SiteContato::where('nome', '<>', 'Maria')->get();   onde for diferente de Maria
    // $contatos = SiteContato::where('nome', 'Maria')->get();   Passando apenas dois parametros, vai fazer a buscar por IGUAL. ex: onde nome for igual a Maria
    // $contatos = SiteContato::where('mensagem', 'like', '%detalhes%')->get(); Vai buscar na coluna mensagem onde houver a palavra detalhes
}
