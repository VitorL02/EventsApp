@extends('layouts.main')

@section('title','EventsApp - Home Page')

@section('content')
    <div id="search-container" class="col-md-12">
        <h1>Busque um Evento</h1>
        <form action="/" method="GET">
            <input type="search" name="search" id="search" class="form-control" placeholder ="Busque...">
        </form>
    </div>
    <div id="events-container" class="col-md-12">
        @if($search)
        <h2>Buscando Por: {{$search}}</h2>
        @else
        <h2>Proximos Eventos :</h2>
        <p class="subtitle">Veja os eventos programados</p>
        @endif
        <div id="cards-container" class="row">
            @foreach($events as $event)
                <div class="card col-md-3">
                    <img src="/img/events/{{$event->image}}" alt="{{$event->title}}">
                    <div class="card-body">
                        <p class="card-date">Data do Evento: {{date('d/y/m H:i',strtotime($event->date))}}</p>
                        <h5 class="card-title">{{$event->title}}</h5>
                        <p class="card-participants">X Participantes</p>
                        <a href="/event/{{$event->id}}" class ="btn btn-primary">Saber Mais</a>
                    </div>
                </div>
            @endforeach
            @if(count($events)==0 && $search)
                <p>Não foi possivel encontrar nenhum evento com:{{$search}}! <a href="/">Ver Todos</a></p>
                @elseif(count($events)==0)
                <p>Nenhum Evento Encontrado!</p>
            @endif
        </div>
    </div>

@endsection