<?php
	session_start();
	if(isset($_POST['deconnexion'])) {
		session_unset();
		session_destroy();
		header ('Location: ../Accueil.php');
	}
?>