@extends('layouts.app')

@section('content')
    <h1>Détails du Tournoi</h1>

    <p><strong>Nom:</strong> {{ $tournament->name }}</p>
    <p><strong>Description:</strong> {{ $tournament->description }}</p>
    <p><strong>Début:</strong> {{ $tournament->start_date }}</p>
    <p><strong>Fin:</strong> {{ $tournament->end_date }}</p>

    <a href="{{ route('tournaments.index') }}">⬅ Retour</a>
@endsection
