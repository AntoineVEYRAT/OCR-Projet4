<?php ob_start(); ?>
<section id="login" class="login-content justify-content-md-center">
	<h2>CONNEXION</h2>
	<div class="login">
		<form action="index.php?action=login&amp;verify" method="post" class="login-gbl">
			<div class="login">
				<label for="login_name">Identifiant</label>
				<input type="text" name="login_name" id="login_name" required>
			</div>
			<div class="login">
				<label for="login_pass">Password</label>
				<input type="password" name="login_pass" id="login_pass" required>
			</div>
			<div class="login">
				<input type="submit" value="Se connecter">
			</div>
		</form>
	</div>
</section>
<hr>
<?php 
	$content = ob_get_clean();
	require('template.php'); 
?>