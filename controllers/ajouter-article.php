<?php

$bdd = new PDO("mysql:host=localhost;dbname=user18", "user18", "fK63_WVd");
if(isset($_POST['article_titre'], $_POST['article_contenu'])) {
    if(!empty($_POST['article_titre']) AND !empty($_POST['article_contenu'])) {

        $article_titre = htmlspecialchars($_POST['article_titre']);
        $article_contenu = htmlspecialchars($_POST['article_contenu']);
        $ins = $bdd->prepare('INSERT INTO articles (titre, contenu, date_time_publication) VALUES (?, ?, NOW())');
        $ins->execute(array($article_titre, $article_contenu));
        $message = 'Votre article a bien été posté';
        header("Location: ../views/index-co.views.php?id=".$_SESSION['id']);
    } else {
        $message = 'Veuillez remplir tous les champs';
    }
}

?>