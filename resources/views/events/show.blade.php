@extends('layouts.main')

@section('title',$event->title)

@section('content')

<div class="col-md-10 offset-md-1">
    <div class="row">
        <div id="image-container" class ="col-md-6">
            <img src="/img/events/{{$event->image}}" class="img-fluid" alt="{{$event->title}}">
        </div>
        <div id="info-container" class="col-md-6">
                <h1>{{$event->title}}</h1>
                <p class="event-city"><ion-icon name="location-outline"></ion-icon> {{$event->city}}</p>
                <p class="events-participants"><ion-icon name="people-outline"></ion-icon> X-participantes</p>
                <p class="event-owner"><ion-icon name="star-outline"></ion-icon> Anfitrião: {{$eventOwner['name']}}</p>
                <p><ion-icon name="calendar-clear-outline"></ion-icon> Data do Evento: {{date('d/y/m H:i',strtotime($event->date))}}</p>
                <div class="col-md-5" id="description-container">
                    <h3>Sobre o Evento: </h3>
                    <p class="event-description">{{$event->description}}</p>
                </div>
                <h3>O evento conta com: </h3>
                <ul id="itens-list">
                    @foreach($event->items as $item)
                        <li><ion-icon name="play-outline"></ion-icon><span>{{$item}}</span></li>
                    @endforeach
                </ul>
                <a href="#" class="btn btn-primary" id="event-submit"> Confirmar presença</a>
        </div>

    </div>
</div>


@endsection


