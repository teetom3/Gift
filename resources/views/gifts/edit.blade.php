@extends('layouts.app')

@section('title', 'Modifier ' . $gift->name)

@section('content')
    <h1>Modifier {{ $gift->name }}</h1>

    <form action="{{ route('gifts.update', $gift) }}" method="POST">
        @csrf
        @method('PUT')

        <div>
            <label for="name">Nom (obligatoire, 3-50 caractères) :</label><br>
            <input type="text" id="name" name="name" value="{{ old('name', $gift->name) }}" required>
            @error('name')
                <span style="color:red">{{ $message }}</span>
            @enderror
        </div>
        <br>

        <div>
            <label for="url">URL (http/https) :</label><br>
            <input type="text" id="url" name="url" value="{{ old('url', $gift->url) }}">
            @error('url')
                <span style="color:red">{{ $message }}</span>
            @enderror
        </div>
        <br>

        <div>
            <label for="details">Détails :</label><br>
            <textarea id="details" name="details">{{ old('details', $gift->details) }}</textarea>
            @error('details')
                <span style="color:red">{{ $message }}</span>
            @enderror
        </div>
        <br>

        <div>
            <label for="price">Prix (obligatoire) :</label><br>
            <input type="number" id="price" name="price" value="{{ old('price', $gift->price) }}" step="0.01" min="0" required>
            @error('price')
                <span style="color:red">{{ $message }}</span>
            @enderror
        </div>
        <br>

        <button type="submit">Enregistrer</button>
        <a href="{{ route('gifts.show', $gift) }}">Annuler</a>
    </form>
@endsection
