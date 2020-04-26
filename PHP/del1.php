<?php
	include "connexion.php";
	
	$del=mysqli_query($bdd, "DELETE FROM composer WHERE noArticle='1';");

	header ('Location: ../Panier.php');
?>