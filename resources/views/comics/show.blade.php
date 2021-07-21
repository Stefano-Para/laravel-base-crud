@extends('layouts.main')

@section('content')
    

    <div class="row py-4">
        <div class="col-3">
            <img class="img-fluid" src="{{ $comic->thumb }}" alt="">
        </div>
        <div class="col-9">
            <h1>{{ $comic->title }}</h1>
            <p>{{ $comic->description }}</p>
            <h3 class="mt-4">Price: {{ $comic->price }}€</h3>
            <ul>
                <li>Serie: {{ $comic->series }}</li>
                <li>Data di vendita: {{ $comic->sale_date }}</li>
                <li>Tipologia: {{ $comic->type }}</li>
            </ul>
        </div>
    </div>
    <h2>Modifica fumetto</h2>
    <a class="btn btn-secondary" href="{{ route('comics.edit', $comic->id) }}">Modifica fumetto</a>
    
    <div class="mt-4 text-center">
        <a class="btn btn-primary" href="{{ route("comics.index") }}">Torna all'elenco dei fumetti</a>
    </div>
@endsection