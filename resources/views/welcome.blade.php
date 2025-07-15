<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Bienvenue sur GamerZone</title>
    <style>
        body {
            font-family: sans-serif;
            background: #f4f4f4;
            text-align: center;
            padding: 80px;
        }
        h1 {
            font-size: 3rem;
            color: #333;
        }
        p {
            font-size: 1.2rem;
            color: #555;
        }
        a.button {
            display: inline-block;
            margin-top: 30px;
            padding: 12px 24px;
            background-color: #007BFF;
            color: white;
            text-decoration: none;
            border-radius: 6px;
            font-weight: bold;
        }
        a.button:hover {
            background-color: #0056b3;
        }
    </style>
</head>
<body>

    <h1>🎮 Bienvenue sur GamerZone !</h1>
    <p>Plateforme de gestion des tournois de jeux vidéo en ligne.</p>

    <a href="{{ route('login') }}" class="button">Se connecter</a>

</body>
</html>
