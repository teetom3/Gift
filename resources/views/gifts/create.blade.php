@extends('layouts.app')

@section('title', 'Ajouter un cadeau')

@section('content')
    <h1>Ajouter un cadeau</h1>

    <form action="{{ route('gifts.store') }}" method="POST">
        @csrf

        <div>
            <label for="name">Nom (obligatoire, 3-50 caractères) :</label><br>
            <input type="text" id="name" name="name" value="{{ old('name') }}" required>
            @error('name')
                <span style="color:red">{{ $message }}</span>
            @enderror
        </div>
        <br>

        <div>
            <label for="url">URL (http/https) :</label><br>
            <input type="text" id="url" name="url" value="{{ old('url') }}">
            @error('url')
                <span style="color:red">{{ $message }}</span>
            @enderror
        </div>
        <br>

        <div>
            <label for="details">Détails :</label><br>
            <textarea id="details" name="details">{{ old('details') }}</textarea>
            @error('details')
                <span style="color:red">{{ $message }}</span>
            @enderror
        </div>
        <br>

        <div>
            <label for="price">Prix (obligatoire) :</label><br>
            <input type="number" id="price" name="price" value="{{ old('price') }}" step="0.01" min="0" required>
            @error('price')
                <span style="color:red">{{ $message }}</span>
            @enderror
        </div>
        <br>

        <button type="submit">Créer</button>
        <a href="{{ route('gifts.index') }}">Annuler</a>
    </form>
@endsection
