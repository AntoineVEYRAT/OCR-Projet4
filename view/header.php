<header class="header-global vertical-align">
	<div class="title col-lg-8">
		<a href="index.php" class="white"><h1>Billet simple pour l'Alaska</h1></a>
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

