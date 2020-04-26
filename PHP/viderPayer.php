<?php
	if(isset($_POST['vider'])) {
		$vider=mysqli_query($bdd, "DELETE FROM composer WHERE noCommande='$noClient';");
		header ('Location: Panier.php');
	}

?>