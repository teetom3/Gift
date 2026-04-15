<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Modifier {{ $gift->name }}</title>
</head>
<body>
    <h1>Modifier {{ $gift->name }}</h1>

    @if($errors->any())
        <ul>
            @foreach($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    @endif

    <form action="{{ route('gifts.update', $gift) }}" method="POST">
        @csrf
        @method('PUT')

        <div>
            <label for="name">Nom (obligatoire, 3-50 caractères) :</label><br>
            <input type="text" id="name" name="name" value="{{ old('name', $gift->name) }}" required>
        </div>
        <br>

        <div>
            <label for="url">URL (http/https) :</label><br>
            <input type="url" id="url" name="url" value="{{ old('url', $gift->url) }}">
        </div>
        <br>

        <div>
            <label for="details">Détails :</label><br>
            <textarea id="details" name="details">{{ old('details', $gift->details) }}</textarea>
        </div>
        <br>

        <div>
            <label for="price">Prix (obligatoire) :</label><br>
            <input type="number" id="price" name="price" value="{{ old('price', $gift->price) }}" step="0.01" min="0" required>
        </div>
        <br>

        <button type="submit">Enregistrer</button>
        <a href="{{ route('gifts.show', $gift) }}">Annuler</a>
    </form>
</body>
</html>
