@extends('layouts.app')

@section('title', 'Liste des cadeaux')

@section('content')
    <h1>Liste des cadeaux</h1>

    @if ($gifts->isEmpty())
        <p>Aucun cadeau pour le moment.</p>
    @else
        <table>
            <thead>
                <tr>
                    <th>Nom</th>
                    <th>Prix</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($gifts as $gift)
                    <tr>
                        <td>{{ $gift->name }}</td>
                        <td>{{ number_format($gift->price, 2, ',', ' ') }} €</td>
                        <td>
                            <a href="{{ route('gifts.show', $gift) }}">Voir</a>
                            &nbsp;
                            <a href="{{ route('gifts.edit', $gift) }}">Modifier</a>
                            &nbsp;
                            <form action="{{ route('gifts.destroy', $gift) }}" method="POST" style="display:inline">
                                @csrf
                                @method('DELETE')
                                <button type="submit" onclick="return confirm('Supprimer ce cadeau ?')">Supprimer</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    @endif
@endsection
