<?php
require'../views/index-co.views.php';
   require'Connection.php';
   if(isset($_GET['id']) AND !empty($_GET['id'])) {
      $getid = htmlspecialchars($_GET['id']);
      $article = $bdd->prepare('SELECT * FROM articles WHERE id = ?');
      $article->execute(array($getid));
      $article = $article->fetch();
      if(isset($_POST['submit_commentaire'])) {
         if(isset($_POST['pseudo'],$_POST['commentaire']) AND !empty($_POST['pseudo']) AND !empty($_POST['commentaire'])) {
            $pseudo = htmlspecialchars($_POST['pseudo']);
            $commentaire = htmlspecialchars($_POST['commentaire']);
            if(strlen($pseudo) < 25) {
               $ins = $bdd->prepare('INSERT INTO commentaires (pseudo, commentaire, id_article) VALUES (?,?,?)');
               $ins->execute(array($pseudo,$commentaire,$getid));
               $c_msg = "<span style='color:green'>Votre commentaire a bien été posté</span>";
            } else {
               $c_msg = "Erreur: Le pseudo doit faire moins de 25 caractères";
            }
         } else {
            $c_msg = "Erreur: Tous les champs doivent être complétés";
         }
      }
   }
   $commentaires = $bdd->prepare('SELECT * FROM commentaires ORDER BY id DESC');
   $commentaires->execute(array($getid));
?>