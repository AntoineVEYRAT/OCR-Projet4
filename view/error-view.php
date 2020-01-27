<!DOCTYPE html>
<html lang="fr">
	<head>
		<meta charset="UTF-8">
		<title>Erreur</title>
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<!-- Load Font -->
		<link href="https://fonts.googleapis.com/css?family=Patrick+Hand&display=swap" rel="stylesheet">
		<link href="https://fonts.googleapis.com/css?family=Jim+Nightshade&display=swap" rel="stylesheet">
		<link href="https://fonts.googleapis.com/css?family=Ma+Shan+Zheng&display=swap" rel="stylesheet">
		<!-- Load Fontawesome -->
		<script src="https://kit.fontawesome.com/fa7ae6c9e7.js" crossorigin="anonymous"></script>
		<!-- Load Bootsrap -->
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
		<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
		<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
		<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
		<script src="https://cdn.tiny.cloud/1/no-api-key/tinymce/5/tinymce.min.js" referrerpolicy="origin"></script>
		<link rel="stylesheet" href="../public/css/style.css">
	</head>
	<body>
	<div class="container">
		<header class="header-glogal vertical-align">
			<div class="title col-lg-8">
				<h1><a href="index.php">Billet simple pour l'Alaska</a></h1>
			</div>
			<div class="menu col-lg-4">
				<?php 
					if(isset($_SESSION['id'])) {
						if ($_SESSION['status'] == true) {
							echo '<p>Bienvenue, ' . $_SESSION['name'] . ' !</p>
							<a href="index.php" class="white"><i class="fas fa-home"></i>Home</a>
							<a href="index.php?action=admin" class="white">Administration</a>
							<a href="index.php?action=logout" class="white">Déconnexion</a>';
						} else {
							echo '<p>Bienvenue, ' . $_SESSION['name'] . ' !</p>
							<a href="index.php" class="white"><i class="fas fa-home"></i>Home</a>
							<a href="index.php?action=logout" class="white">Déconnexion</a>';
						}
					} else {
						echo 
							'<a href="index.php" class="white"><i class="fas fa-home"></i>Home</a>
							<a href="index.php?action=subscribe" class="white">Inscription</a>
							<a href="index.php?action=login" class="white">Connexion</a>';
					}
				?>
			</div>
		</header>
			<div class="error justify-content-md-center">
				<h2>Oups, Une erreur s'est produite !</h2>
				<br>
				<h3>
				<?php
					if (($errorMessage === 'Erreur : Mauvais identifiant et/ou mot de passe !') || ($errorMessage ==='Erreur : Mot de passe erroné !')) {
						echo $errorMessage;
						?>
							</h3>
						<?php
						echo '<br><a href="index.php?action=login">Réessayer</a>';
					} else {
						echo $errorMessage;
						?>
							</h3>
						<?php
						echo '<br><a href="index.php"> Retourner à l\'accueil</a>';
					}
				?>
			</div>
			<footer class="footer-content justify-content-md-center">
				<div class="footer-error text-center">
					<p>©️2019 -</p><a href="index.php" class="lien-footer">Billet simple pour l'Alaska</a><p>- Tous les droits réservés</p>
				</div>
			</footer>
		</div>
	</body>
</html>