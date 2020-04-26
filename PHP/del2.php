<?php
	include "connexion.php";
	
	$del=mysqli_query($bdd, "DELETE FROM composer WHERE noArticle='2';");
	
	header ('Location: ../Panier.php');
?>