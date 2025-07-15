@extends('layouts.app')

@section('content')
    <h1>Liste des Tournois</h1>

    @if (Auth::user()->hasRole('admin') || Auth::user()->hasRole('organizer'))
        <a href="{{ route('tournaments.create') }}">➕ Nouveau tournoi</a><br><br>
    @endif

    <ul>
        @foreach ($tournaments as $tournament)
            <li>
                <a href="{{ route('tournaments.show', $tournament) }}">{{ $tournament->name }}</a>
                @if (Auth::user()->hasRole('admin') || Auth::user()->hasRole('organizer'))
                    | <a href="{{ route('tournaments.edit', $tournament) }}">Modifier</a>
                    <form action="{{ route('tournaments.destroy', $tournament) }}" method="POST" style="display:inline;">
                        @csrf
                        @method('DELETE')
                        <button onclick="return confirm('Supprimer ce tournoi ?')">Supprimer</button>
                    </form>
                @endif
            </li>
        @endforeach
    </ul>
@endsection
