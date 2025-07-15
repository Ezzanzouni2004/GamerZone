@extends('layouts.app')

@section('content')
    <h1>Créer un Tournoi</h1>

    <form method="POST" action="{{ route('tournaments.store') }}">
        @csrf
        <label>Nom:</label><br>
        <input type="text" name="name"><br>
        <label>Description:</label><br>
        <textarea name="description"></textarea><br>
        <label>Date de début:</label><br>
        <input type="date" name="start_date"><br>
        <label>Date de fin:</label><br>
        <input type="date" name="end_date"><br>
        <button type="submit">Créer</button>
    </form>
@endsection
