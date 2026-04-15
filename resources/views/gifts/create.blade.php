<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Ajouter un cadeau</title>
</head>
<body>
    <h1>Ajouter un cadeau</h1>

    @if($errors->any())
        <ul>
            @foreach($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    @endif

    <form action="{{ route('gifts.store') }}" method="POST">
        @csrf

        <div>
            <label for="name">Nom (obligatoire, 3-50 caractères) :</label><br>
            <input type="text" id="name" name="name" value="{{ old('name') }}" required>
        </div>
        <br>

        <div>
            <label for="url">URL (http/https) :</label><br>
            <input type="url" id="url" name="url" value="{{ old('url') }}">
        </div>
        <br>

        <div>
            <label for="details">Détails :</label><br>
            <textarea id="details" name="details">{{ old('details') }}</textarea>
        </div>
        <br>

        <div>
            <label for="price">Prix (obligatoire) :</label><br>
            <input type="number" id="price" name="price" value="{{ old('price') }}" step="0.01" min="0" required>
        </div>
        <br>

        <button type="submit">Créer</button>
        <a href="{{ route('gifts.index') }}">Annuler</a>
    </form>
</body>
</html>
