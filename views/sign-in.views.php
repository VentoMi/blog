<?php
    require 'controllers/inscription.php';
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css/style.css">
    <title>Inscription blog</title>
</head>
<body class="body">
    <section>
        <h1  class="hidden">
            Inscription et connexion
        </h1>
        <div>
            <section>
                <h2>Inscription</h2>
                <form method="POST" action="" class="inscription">
                    <div class="flex">
                        <label class="marg-top" for="pseudo">Pseudo :</label>
                        <input type="text" placeholder="Votre pseudo" id="pseudo" name="pseudo" value="<?php if(isset($pseudo)) { echo $pseudo; } ?>" />
                    </div>
                   <div class="flex">
                        <label class="marg-top" for="mail">Mail :</label>
                        <input type="email" placeholder="Votre mail" id="mail" name="mail" value="<?php if(isset($mail)) { echo $mail; } ?>" />
                    </div>
                   <div class="flex">
                        <label class="marg-top" for="mdp">Mot de passe :</label>
                        <input type="password" placeholder="Votre mot de passe" id="mdp" name="mdp" />
                    </div>
                   <div class="flex">
                        <label class="marg-top" for="mdp2">Confirmation du mot de passe :</label>
                        <input type="password" placeholder="Confirmez votre mdp" id="mdp2" name="mdp2" />
                    </div>
                    <input class="submit" type="submit" name="forminscription" value="Je m'inscris" />
                    <div class="flex link">
                        <a href="index.php">Retourner à la page d'accueil</a>
                        <a href="sing-up.php">J'ai déja un compte</a>
                    </div>
                </form>
            </section>
            <?php
            if(isset($erreur)) {
                echo '<font color="red">'.$erreur."</font>";
            }
            ?>
        </div>
    </section>
</body>
</html>