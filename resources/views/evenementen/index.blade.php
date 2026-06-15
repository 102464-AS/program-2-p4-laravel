@extends('layouts.app')

@section('content')
    <h1>Evenementen lijst</h1>

    <ul>
        @foreach($items as $item)
            <li>{{ $item->naam }} - {{ $item->datum }}</li>
        @endforeach
    </ul>

    <a href="/evenementen/create">Nieuw evenement</a>
@endsection