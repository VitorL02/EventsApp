<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class EventController extends Controller
{
    public function index(){
        $nome = "Vitor";
        $idade = 21;
        $array = [10,20,30,40,50];
        $namesArray = ["Vitor","Clara","Varley"];
        return view('homepage',[
            'nome' => $nome,
             'idade' => $idade, 
             'profissao' => 'Programador',
             'array' => $array,
             'namesArray' => $namesArray
            ]); // retorna a variavel nome pra ser acessada em views;
    }

    public function createEvents(){
        return view('events.create');
    }
}
