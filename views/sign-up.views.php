<?php
  include '../controllers/se-connecter.php';
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="../css/style.css">
    <title>Connexion blog</title>
</head>
<body class="body">
   <section>
        <div>
           <section>
               <h2>Connexion</h2>
               <form method="POST" action="" class="inscription">
                       <div>
                           <div class="flex">
                            <label class="marg-top" for="email">Votre email</label>
                               <input type="email" name="mailconnect" placeholder="Mail" />
                           </div>
                           <div class="flex">
                               <label class="marg-top" for="password">Votre mot de passe</label>
                               <input type="password" name="mdpconnect" placeholder="Mot de passe" />
                           </div>
                       </div>
                   <input class="submit" type="submit" name="formconnexion" value="Se connecter !" />
                   <div class="flex link">
                        <a href="../index.php">Retourner à la page d'accueil</a>
                        <a href="sign-in.views.php">Je veux m'inscrire</a>
                    </div>
               </form>
               <?php
               if(isset($erreur)) {
                   echo '<font-style color="red">'.$erreur."</font-style>";
               }
               ?>
           </section>
       </div>
   </section>
        
</body>
</html>