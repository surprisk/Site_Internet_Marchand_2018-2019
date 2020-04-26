<?php

	if(isset($_SESSION['noClient'])){
		$montant = 0;
		$noClient=$_SESSION['noClient'];
		include 'connexion.php';
		include "viderPayer.php";
		$resultat = mysqli_query($bdd, "SELECT * FROM composer, article WHERE noCommande ='$noClient' && composer.noArticle = article.noArticle;");
		if(mysqli_num_rows($resultat)){
			echo "<CENTER>";
			echo "<table ID='tabPanier'><tr><th colspan='8'><div style='background-color: grey; padding: 20px;'>PANIER</div></th></tr>";
			echo "<tr><td>Numéro commande</td>";
			echo "<td>Aperçu</td>";
			echo "<td>Nom Produit</td>";
			echo "<td>Quantité</td>";
			echo "<td>Prix Produit</td>";
			echo "<td>Action</td></tr>";
			while($donnees = mysqli_fetch_assoc($resultat)){
				echo "<tr>";
				echo "<td>".$donnees['noCommande']."</td>";
				echo "<td><img style='width:100px;heigth:100px;' src='".$donnees['imgArticle']."'/></td>";
				echo "<td>".$donnees['nomArticle']."</td>";
				echo "<td><form action='PHP/AjouterPanierArt".$donnees['noArticle'].".php' method='post'><input style='width : 70px' name='nbArticle' type='number' value='".$donnees['nbArticle']."'/> <button type='submit' style='background-color: green; border-width: 0; padding: 5px; margin-top: 5px; margin-bottom: 20px; border-radius: 20px; cursor: pointer'>Soumettre</button></form></td>";
				echo "<td>".$donnees['prix']."€</td>";
				echo "<td><form action='PHP/del".$donnees['noArticle'].".php' method='post'><div style='background-color: red; border-radius: 20px; padding: 5px;'> <button type='submit' name='del' style='background-color:  transparent; border-width: 0; cursor: pointer;'/><i class='far fa-trash-alt'></i> </div></form></td>";
				echo "</tr>";
				$montant += $donnees['prix']*$donnees['nbArticle'];
			}
			echo "</table>";
			echo "<div style='background-color: grey; padding: 10px;'> Total commande : ".$montant."€</div>";
			echo "<form method='post'>";
			echo "<button type='submit' name='vider' style='background-color: red; border-width: 0; padding: 10px; margin-top: 20px; margin-bottom: 20px; margin-right: 10px; border-radius: 20px; cursor: pointer'>Vider le panier <i class='far fa-trash-alt'></i></button>";
			echo "<button type='submit' name='payer' style='background-color: green; border-width: 0; padding: 10px; margin-top: 20px; margin-bottom: 20px; margin-left: 10px; border-radius: 20px; cursor: pointer'>Payer <i class='fas fa-check'></i></button>";
			echo "</form>";
			echo "</CENTER>";
		}
		else{
			echo "<p style='text-align : center; padding : 30px;'> Le panier est vide :( </p>";
		}
	}
	else{
		echo "<p style='text-align : center; padding : 30px;'> Pour ajouter un article connectez-vous ! </p>";
	}
?>