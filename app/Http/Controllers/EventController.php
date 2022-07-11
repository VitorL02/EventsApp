<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Event;

class EventController extends Controller
{
    public function index(){
        $events = Event::all(); // comando orm que retorna todos os eventos;

        return view('homepage',['events' => $events]); // retorna a variavel nome pra ser acessada em views;
    }

    public function createEvents(){
        return view('events.create');
    }
}
