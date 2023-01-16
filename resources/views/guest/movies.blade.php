@extends('guest.layouts.base')

@section('content')
    <ul class="container">
        @foreach ($movies as $movie)
            <li class="card">
                <p><span>Titolo:</span> {{ $movie->title }}</p>
                <p><span>Titolo Originale:</span> {{ $movie->original_title }}</p>
                <p><span>Data di uscita:</span> {{ $movie->date }}</p>
                <p><span>Voto:</span> {{ $movie->vote }}</p>
            </li>
        @endforeach
    </ul>
@endsection
