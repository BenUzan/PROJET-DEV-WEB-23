<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles/connexion-inscription.css">
    <title>RDC MON PAYS - Inscription</title>
</head>
<body>
    <div class="conteuneur">
        <div class="cadre-1">
            <h1>S'inscrire</h1>
            <p>Vous avez un compte? <a href="connexion.html">Connecter-vous</a></p>
            <form class="formulaire" method="post" action="controleur/inscription.php">
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
                    <label>Confirmez mot de passe</label>
                    <br>
                    <input class="champ" type="password" name="mdpVerifier" placeholder="Votre mot de passe">
                </div>
                <div class="empiled">
                    <button class="bouton" type="submit">Creer un compte</button>
                </div>
            </form>
        </div>
        <div class="cadre-2">
            <img class="image" src="images/bg.jpg" alt="bg">
        </div>
    </div>
    <footer>

    </footer>
</body>
</html>