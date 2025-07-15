@extends('layouts.app')

@section('content')
    <h1>Dashboard Utilisateur</h1>
    <p>Bienvenue, {{ Auth::user()->name }} 👋</p>
    <p>Vous êtes connecté en tant que <strong>{{ Auth::user()->roles->pluck('name')->join(', ') }}</strong></p>
@endsection
