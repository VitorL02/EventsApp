@extends('layouts.main')

@section('title','Contato')

@section('content')


    @if($search != '')
        <p>O usuario busca o seguinte contato {{$search}}</p>
    @endif

@endsection
