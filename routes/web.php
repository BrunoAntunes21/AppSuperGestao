<?php

use App\Http\Controllers\LoginController;
use App\Http\Middleware\LogacessoMiddleware;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
//nomendo rotas ->name('nome da rota');
Route::get('/','IndexController@index')->name('site.index')->middleware('log.acesso');//utilizando midleware nas rotas
Route::get('Info','InfoController@Info')->name('site.info')->middleware('log.acesso');
//o laravel requer um token para fazer o post e formularios
Route::post('Contatos','ContatoController@contatos')->name('site.contatos');
Route::post('Contatos','ContatoController@salvar')->name('site.contatos');
Route::get('Contatos','ContatoController@contatos')->name('site.contatos')->middleware('log.acesso');


Route::get('/login','LoginController@login')->name('site.login');

Route::prefix('/app')->group(function(){
    //encadeando midlewares o 1º para registro de log e o segundo para jogar para a pagina de validação(pedente)
    Route::middleware('log.acesso','autenticacao')->get('/clientes', function(){return 'Clientes';})->name('app.clientes');
    Route::middleware('log.acesso','autenticacao')->get('/fornecedores','FornecedorController@index')->name('app.fornecedores');
    Route::middleware('log.acesso','autenticacao')->get('/produtos', function(){return 'Produtos';})->name('app.produtos');

});
//criação de uma nova rota para teste com parametros
//caso todos os paramentros forem opcionais a regra é da direita para a esquerda quando se trata da passagem de parametro
Route::get('/contato/{nome}/{cateoria_id}',//
function(
    string $nome='Desconhecido',
    int $categoria_id=1){
    echo 'olá meu nome é: '.$nome.'<br>'.'id da categoria : '.$categoria_id.'<br>';
    //tratamento de erro caso não ccategoria_id não recebe um valor numerico inteiro
}
)->where('categoria_id','[0-9]+')->where('nome','[A-Za-z]+');
/*criação de rotas para a pratica de redirecionamento
de rotas e encaminhamneto de parametros para o controllador*/
Route::get('/teste/{p1}/{p2}/{nome}','TesteController@teste')->name('teste');
/*Route::get('/r2',function(){
    return redirect()->route('site.r1');
})->name('site.r2');*/
//ou
//Route::redirect('/r2','/r1');


//rota de contigencia "fallback"
Route::fallback(function(){
    echo '404 não econtrada.<a href="'.route('site.index').'">Voltar ';
});
