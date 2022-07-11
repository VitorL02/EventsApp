@extends('layouts.main')

@section('title','EventsApp - Home Page')

@section('content')

        <h1>Titulo Teste</h1>
        <img src="/img/banner.jpg" alt="">
        @foreach($events as $event)
        <!-- Utilizando uma -> e possivel acessar as propriedades de um objeto -->
        <p>{{$event->title}} -- {{$event->description}}</p> 
    @endforeach

@endsection