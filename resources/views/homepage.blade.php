@extends('layouts.main')
@section('title','EventsApp - Home Page')

@section('content')
        <h1>Titulo Teste</h1>
        <img src="/img/banner.jpg" alt="">
        @if(10 > 5)
            <p>Condição e Verdadeira</p>
        @endif
        @if($nome == "Pedro")
            <p>Nome é pedro</p>
        @elseif($nome == 'Vitor')
            <p>O nome certo é {{$nome}}</p>
        @else
            <p>O nome e indefinido </p>
        @endif
            <p>Dados: Nome: {{$nome}} e sua idade é {{$idade}} e sua profissão é {{$profissao}}</p>

        @for ($i = 0; $i < count($array); $i++)  
            <p>{{$array[$i]}}</p>
        @endfor
        {{-- O blade não renderiza comentarios no inspecionar elemento por exemplo --}}
        
        @foreach($namesArray as $nomes)
        {{-- O loop e uma variavel do proprio blade --}}
            <p>{{$loop -> index}}</p>
            <p>{{$nomes}}</p>
        @endforeach
@endsection