<?php
    require 'controllers/redaction-article.php';
?>
<!DOCTYPE html>
<html>
<head>
    <title>Edition blog php</title>
   <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
	<link rel="stylesheet" href="css/style.css">
</head>
<body>
<form method="POST">
    <input type="text" name="article_titre" placeholder="Titre"<?php if($mode_edition == 1) { ?> value="<?=
    $edit_article['titre'] ?>"<?php } ?> /><br />
    <textarea name="article_contenu" placeholder="Contenu de l'article"><?php if($mode_edition == 1) { ?><?=
            $edit_article['contenu'] ?><?php } ?></textarea><br />
    <input type="submit" value="Envoyer l'article" />
</form>
<?php if(isset($message)) { echo $message; } ?>
</body>
</html>