<?php ob_start(); ?>
<div class="confirm row justify-content-md-center">
	<h3>Confirmez votre choix :</h3>
	<?php
		echo '<div class="col-lg-12"><h4><a href="index.php?action=admin&delete&id=' . $id . '&confirm" color="red">YES</a></h4></div>';
		echo '<div class="col-lg-12"><a href="index.php" color="black">Retourner à l\'accueil</a></div>';			
	?>
</div>
<?php 
	$content = ob_get_clean();
	require('template.php'); 
?>