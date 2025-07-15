@extends('layouts.app')

@section('content')
    <h1>Liste des Joueurs</h1>

    <a href="{{ route('players.create') }}">➕ Ajouter un joueur</a><br><br>

    <ul>
        @foreach ($players as $player)
            <li>
                {{ $player->name }} ({{ $player->email }}) — 
                Tournoi: {{ $player->tournament->name ?? 'Aucun' }}
            </li>
        @endforeach
    </ul>
@endsection
