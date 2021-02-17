<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class EventController extends Controller
{
    public function index(){
        
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
    }

    public function create(){
        return view('events.create');
    }
}


