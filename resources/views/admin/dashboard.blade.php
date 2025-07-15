@extends('layouts.app')

@section('content')
    <h1>Dashboard Admin</h1>
    <ul>
        <li><a href="{{ route('tournaments.index') }}">📋 Gérer les tournois</a></li>
        <li><a href="{{ route('players.index') }}">🎮 Voir les joueurs</a></li>
    </ul>
@endsection
