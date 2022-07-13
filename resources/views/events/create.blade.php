@extends('layouts.main')

@section('title','EventsApp - Criar Eventos')

@section('content')

<div id="event-create-container" class="col-md-6 offset-md-3">
    <h1>Crie Seu Evento</h1>
    <form action="/events" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="form-group">
            <label for="Image">Imagem do Evento :</label>
                <input type="file" id="image" name="image"  class="form-control form-control-lg">
        </div>
        <div class="form-group">
            <label for="Title">Evento :</label>
                <input type="text" id="title" name="title" placeholder="Nome do Evento" class="form-control">
        </div>
        <div class="form-group">
            <label for="Title">Cidade :</label>
            {{--TODO: Alterar para um select que permite somente cidades pre-selecionadas--}}   
            <input type="text" id="city" name="city" placeholder="Nome da cidade" class="form-control">
        </div>
        <div class="form-group">
            <label for="Title">O evento é Privado? </label>
             <select name="private" id="private" class="form-select">
                <option value="0">Não</option>
                <option value="1">Sim</option>
             </select>
        </div>
        <div class="form-group">
            <label for="Title">Descrição : </label>
            <textarea name="description" id="description" placeholder="Descreva o Evento" class="form-control"></textarea>
        </div>
        <input type="submit" class="btn btn-primary" value="Criar Evento">
    </form>
</div>
@endsection