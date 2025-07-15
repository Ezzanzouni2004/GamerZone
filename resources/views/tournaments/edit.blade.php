@extends('layouts.app')

@section('content')
    <h1>Modifier Tournoi</h1>

    <form method="POST" action="{{ route('tournaments.update', $tournament) }}">
        @csrf
        @method('PUT')
        <label>Nom:</label><br>
        <input type="text" name="name" value="{{ $tournament->name }}"><br>
        <label>Description:</label><br>
        <textarea name="description">{{ $tournament->description }}</textarea><br>
        <label>Date de début:</label><br>
        <input type="date" name="start_date" value="{{ $tournament->start_date }}"><br>
        <label>Date de fin:</label><br>
        <input type="date" name="end_date" value="{{ $tournament->end_date }}"><br>
        <button type="submit">Modifier</button>
    </form>
@endsection
