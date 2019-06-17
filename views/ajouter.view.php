<?php 
    require 'controllers/ajouter-article.php';
?>

<!DOCTYPE html>
<html>
<head>
    <title>Rédaction</title>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
	<link rel="stylesheet" href="css/style.css">
</head>
<body>
<form method="POST">
    <input type="text" name="article_titre" placeholder="Titre" /><br />
    <textarea name="article_contenu" placeholder="Contenu de l'article"></textarea><br />
    <input type="submit" value="Envoyer l'article" />
</form>
<br />
<?php if(isset($message)) { echo $message; } ?>
</body>
</html>




