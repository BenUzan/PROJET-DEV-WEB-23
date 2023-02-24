<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="public/styles/connexion-inscription.css">
    <title>RDC MON PAYS - connexion</title>
</head>
<body>
    <div class="conteuneur">
        <div class="cadre-1">
            <img class="logo" src="public/images/logo.jpg" alt="logo">
            <h1>Se connecter</h1>
            <p>Vous n'avez pas de compte? <a href="connexion.html">Inscrivez-vous !</a></p>
            <form class="formulaire" method="post" action="/controleur/inscription.php">
                <div class="empiled">
                    <label>Nom d'utilisateur</label>
                    <br>
                    <input class="champ" type="text" name="pseudo" placeholder="Votre pseudonyme">
                </div>
                <div class="empiled">
                    <label>Mot de passe</label>
                    <br>
                    <input class="champ" type="password" name="motdepasse" placeholder="Votre mot de passe">
                </div>
                <div class="empiled">
                    <button class="bouton" type="submit">Se connecter</button>
                </div>
            </form>
        </div>
        <div class="cadre-2">
            <img class="image" src="public/images/bg.jpg" alt="bg">
        </div>
    </div>
</body>
</html>