@extends('layouts.main')

@section('content')
<h1>Modifica il fumetto: "{{ $comic->title }}"</h1>
<a class="btn btn-primary" href="{{ route('comics.show', $comic->id) }}">Visualizza fumetto</a>

<form method="POST" action="{{ route('comics.update', $comic->id) }}">
    @csrf
    @method('PATCH')
    <div class="form-group">
        <label for="title">Titolo</label>
        <input 
            type="text"
            class="form-control"
            id="title"
            placeholder="Inserisci il Titolo del fumetto"
            name="title"
            value="{{ $comic->title }}">
    </div>
    <div class="form-group">
        <label for="description">Descrizione</label>
        <textarea
            class="form-control"
            id="description"
            name="description"
            placeholder="Inserisci la Descrizione del fumetto"
            rows="4">{{ $comic->description }}</textarea>
    </div>
    <div class="form-group">
        <label for="price">Prezzo</label>
        <input type="number" step="0.01" class="form-control" id="price" placeholder="Inserisci il Prezzo del fumetto" name="price" value="{{ $comic->price }}">
    </div>
    <div class="form-group">
        <label for="sale_date">Sale Date</label>
        <input type="text" class="form-control" id="sale_date" placeholder="Inserisci la data di pubblicazione fumetto" name="sale_date" value="{{ $comic->sale_date }}">
    </div>
    <div class="form-group">
        <label for="thumb">Url Copertina</label>
        <input type="text" class="form-control" id="thumb" placeholder="Inserisci la Copertina fumetto" name="thumb" value="{{ $comic->thumb }}">
    </div>
    <div class="form-group">
        <label for="series">Series</label>
        <input type="text" class="form-control" id="series" placeholder="Inserisci la Serie del fumetto" name="series" value="{{ $comic->series }}">
    </div>
    <div class="form-group">
        <label for="type">Tipo</label>
        <input type="text" class="form-control" id="type" placeholder="Inserisci il Tipo di fumetto" name="type" value="{{ $comic->type }}">
    </div>

    <a href="{{ route('comics.index') }}" type="submit" class="btn btn-secondary">Elenco Fumetti</a>
    <button type="submit" class="btn btn-primary">Salva le modifiche</button>
</form>
    
@endsection