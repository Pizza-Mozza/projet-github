<!doctype html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/assets/css/style.css">
    <title>Mon Application</title>
</head>
<body>
<header>
    <nav>
        <a href="/">Accueil</a>
        <a href="/inscription">Inscription</a>
        <a href="/connexion">Connexion</a>
    </nav>
</header>
<main>
    <?= $content ?? '' ?>
</main>
</body>
</html>
