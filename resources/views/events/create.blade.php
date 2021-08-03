@extends('layouts.main')

@section('title', 'Criar Evento')

@section('content')

    <div class="col-md-6 offset-md-3" id="event-create-container">
        <h1>Crie o seu evento</h1>
        <form action="/events" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="form-group">
                <label for="Image">Imagem do evento:</label>
                <input type="file" id="image" name="image" class="form-control-file">
            </div>
            <div class="form-group">
                <label for="title">Evento:</label>
                <input type="text" class="form-control" id="title" name="title" placeholder="Nome do evento">
            </div>
            <div class="form-group">
                <label for="title">Cidade:</label>
                <input type="text" class="form-control" id="city" name="city" placeholder="local do evento">
            </div>
            <div class="form-group">
                <label for="title">O Evento é privado?</label>
                <select name="private" id="private" class="form-control">
                    <option value="0">Não</option>
                    <option value="1">Sim</option>
                </select>
            </div>
            <div class="form-group">
                <label for="title">Descrição: </label>
                <textarea name="description" id="description" class="form-control" placeholder="O que vai acontecer no evento?"></textarea>
            </div>
            <div class="form-group">
                <label for="title">Adicione Itens de Infraestrutura:</label>
                <div class="form-group">
                    <input type="checkbox" name="items[]" value="Cadeiras">Cadeiras
                </div>
                <div class="form-group">
                    <input type="checkbox" name="items[]" value="Palco">Palco
                </div>
                <div class="form-group">
                    <input type="checkbox" name="items[]" value="Cerveja Grátis">Cerveja Grátis
                </div>
                <div class="form-group">
                    <input type="checkbox" name="items[]" value="Open food">Open Food
                </div>
                <div class="form-group">
                    <input type="checkbox" name="items[]" value="Brindes">Brindes
                </div>
            </div>
            <input type="submit" class="btn btn-primary" value="Criar evento"/>
        </form>

    </div>

@endsection
