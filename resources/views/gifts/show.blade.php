@extends('layouts.app')

@section('title', $gift->name)

@section('content')
    <h1>{{ $gift->name }}</h1>

    <p><strong>Prix :</strong> {{ number_format($gift->price, 2, ',', ' ') }} €</p>

    @if($gift->url)
        <p><strong>URL :</strong> <a href="{{ $gift->url }}" target="_blank">{{ $gift->url }}</a></p>
    @endif

    @if($gift->details)
        <p><strong>Détails :</strong> {{ $gift->details }}</p>
    @endif

    <a href="{{ route('gifts.edit', $gift) }}">Modifier</a>
    &nbsp;
    <a href="{{ route('gifts.index') }}">Retour à la liste</a>
@endsection
