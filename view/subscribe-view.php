<?php ob_start(); ?>
	<section id="subscribe" class="sub-content justify-content-md-center">
		<h2>INSCRIPTION</h2>
		<div class="subscribe">
			<form action="index.php?action=subscribe&verify" method="post" class="subscribe-gbl">
				<div class="subscribe">
					<label for="subscribe_name">Identifiant</label>
					<input type="text" name="subscribe_name" id="subscribe_name" required>
				</div>
				<div class="subscribe">
					<label for="subscribe_pass">Password</label>
					<input type="password" name="subscribe_pass" id="subscribe_pass" required>
				</div>
				<div class="subscribe">
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