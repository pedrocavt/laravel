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

    $nome = "Pedro";
    $idade = 25;
    $profissao = "Desenvolvimento";

    $nomes = ["Mateus", "Pedro", "Maria", "Ana", "Sabrinna"];

    $arr = [10,20,40,50,60];

    return view('welcome', 
    [
        'nome' => $nome, 'idade' => $idade,
        'profissao' => $profissao,
        'arr' => $arr,
        'nomes' => $nomes
        ]);
});

Route::get('/contact', function () {
    return view('contacts');
});
