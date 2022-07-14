@extends('layouts.main')

@section('title','EventsApp - Criar Eventos')

@section('content')

<div id="event-create-container" class="col-md-6 offset-md-3">
    <h1>Crie Seu Evento</h1>
    <form action="/events" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="form-group">
            <label for="Image">Imagem do Evento :</label>
                <input type="file" id="image" required name="image"  class="form-control form-control-lg">
        </div>
        <div class="form-group">
            <label for="Title">Evento :</label>
                <input type="text" id="title" required name="title" placeholder="Nome do Evento" class="form-control">
        </div>
        <div class="form-group">
            <label for="Date">Data do Evento</label>
                <input type="datetime-local" id="date" required name="date" class="form-control">
        </div>
        <div class="form-group">
            <label for="City">Cidade :</label>
            {{--TODO: Alterar para um select que permite somente cidades pre-selecionadas--}}   
            <input type="text" id="city" name="city" required placeholder="Nome da cidade" class="form-control">
        </div>
        <div class="form-group">
            <label for="Title">O evento é Privado? </label>
             <select name="private" id="private" required class="form-select">
                <option value="0">Não</option>
                <option value="1">Sim</option>
             </select>
        </div>
        <div class="form-group">
            <label for="Title">Descrição : </label>
            <textarea name="description" id="description" required placeholder="Descreva o Evento" class="form-control"></textarea>
        </div>
        <div class="form-group">
            <label for="Title">Adicione itens de infra: </label>
           <div class="form-group">
            <input type="checkbox" id="items"  name="items[]" class="form-check-input" value="Open Bar">Open Bar
           </div>
           <div class="form-group">
            <input type="checkbox" id="items" name="items[]"  class="form-check-input" value="Palco">Palco
           </div>
           <div class="form-group">
            <input type="checkbox" id="items" name="items[]" class="form-check-input" value="Open Food">Open Food
           </div>
           <div class="form-group">
            <input type="checkbox" id="items" name="items[]" class="form-check-input" value="Brindes">Brindes
           </div>
        </div>
        <input type="submit" class="btn btn-primary" class="form-check-input" value="Criar Evento">
    </form>
</div>
@endsection