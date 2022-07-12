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
    public function store(Request $request){
        $event = new Event;
        //Acessa os dados do objeto instaciado na view e salva no banco com o metodo save
        $event->title=$request->title;
        $event->city=$request->city;
        $event->private=$request->private;
        $event->description=$request->description;
        
        $event->save();

        return redirect('/');
    }
}
