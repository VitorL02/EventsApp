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

Route::get('/', function () {
    $nome = "Vitor";
    $idade = 21;
    $array = [10,20,30,40,50];
    $namesArray = ["Vitor","Clara","Varley"];
    return view('welcome',[
        'nome' => $nome,
         'idade' => $idade, 
         'profissao' => 'Programador',
         'array' => $array,
         'namesArray' => $namesArray
        ]); // retorna a variavel nome pra ser acessada em views;
});
Route::get('/contact', function () {
    return view('contact');
});
