<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>GamerZone</title>
</head>
<body>
    <nav>
        <a href="{{ route('dashboard') }}">🏠 Dashboard</a> |
        <a href="{{ route('tournaments.index') }}">🎮 Tournois</a> |
        <a href="{{ route('players.index') }}">👥 Joueurs</a> |
        <form method="POST" action="{{ route('logout') }}" style="display:inline;">
            @csrf
            <button type="submit">🚪 Déconnexion</button>
        </form>
    </nav>
    <hr>
    <div>
        @yield('content')
    </div>
</body>
</html>
