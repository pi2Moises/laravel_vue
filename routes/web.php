<?php

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

// Route::get('/', function () {
//     return view('welcome');
// });
Route::get('/', 'PrincipalController@index');
Route::get('/contato', 'ContatoController@index');
Route::get('/sobre-nos', 'SobreNosController@index');


/**function callback --  recebendo paramentros na rota */
// Route::get('/contato/{nome}/{telefone}', function( string $nome, int $telefone ){
//     echo 'Nome: '. $nome.'<br>';
//     echo 'Telefone: '. $telefone.'<br>';

// })->where('nome', '[A-Za-z ]+')->where('telefone','[0-9]+');