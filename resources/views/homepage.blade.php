@extends('layouts.main')

@section('title','EventsApp - Home Page')

@section('content')
    <div id="search-container" class="col-md-12">
        <h1>Busque um Evento</h1>
        <form action="">
            <input type="search" name="search" id="search" class="form-control" placeholder ="Busque...">
        </form>
    </div>
    <div id="events-container" class="col-md-12">
        <h2>Proximos Eventos :</h2>
        <p class="subtitle">Veja os eventos programados</p>
        <div id="cards-container" class="row">
            @foreach($events as $event)
                <div class="card col-md-3">
                    <img src="/img/event_placeholder.jpg" alt="{{$event->title}}">
                    <div class="card-body">
                        <p class="card-date">Data do Evento: 10/01/2001</p>
                        <h5 class="card-title">{{$event->title}}</h5>
                        <p class="card-participants">X Participantes</p>
                        <a href="#" class ="btn btn-primary">Saber Mais</a>
                    </div>
                </div>
            @endforeach
        </div>
    </div>

@endsection