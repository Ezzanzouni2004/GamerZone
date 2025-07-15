@extends('layouts.app')

@section('content')
    <h1>Inscription Joueur</h1>

    <form method="POST" action="{{ route('players.store') }}">
        @csrf
        <label>Nom:</label><br>
        <input type="text" name="name"><br>
        <label>Email:</label><br>
        <input type="email" name="email"><br>
        <label>Tournoi:</label><br>
        <select name="tournament_id">
            @foreach($tournaments as $tournament)
                <option value="{{ $tournament->id }}">{{ $tournament->name }}</option>
            @endforeach
        </select><br>
        <button type="submit">S’inscrire</button>
    </form>
@endsection
