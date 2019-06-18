<?php
	$bdd = new PDO("mysql:host=127.0.0.1;dbname=articles", "root", "");
	$articles = $bdd->query('SELECT * FROM articles ORDER BY date_time_publication DESC');
?>
<!DOCTYPE html>
<html lang="fr">
<head>
	<meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
	<link rel="stylesheet" href="css/style.css">
	<title>
		Blog php - Vento Michael
	</title>
</head>
<body>
	<div class="div__navigation">
		<div class="logo"></div>
		<nav>
			<h1 class="hidden">Navigation</h1>
			<ul class="nav__list">
				<li class="nav__item">
					<a href="index.php">Home</a>
				</li>
				<li class="nav__item">
					<a href="./views/sign-in.views.php">Connexion / inscription</a>
				</li>
			</ul>
		</nav>
	</div>
	<section class="section__dinosaure">
		<div>
			<h1 class="hidden">
				Les dinosaures
			</h1>
		</div>
		<img class="img__dinosaure" src="img/dinosaure.jpg" alt="">
	</section>
	<div class="div__all">
		<section class="about">
            <h2 class="title__about">
                Les dinosaures que savont nous d'eux&nbsp;?
            </h2>
            <div>
                <ul>
                    <?php while($a = $articles->fetch()) { ?>
                        <li class="list"><a href="article.php?id=<?= $a['id'] ?>"><?= $a['titre'] ?></a><br><br><?= $a['contenu'] ?></a></li>
                    <?php } ?>
                 <ul>
            </div>
		</section>
	</div>
	<footer class="end">
		<p>
			Copyright © Vento Michael 2019
		</p>
	</footer>
</body>
</html>