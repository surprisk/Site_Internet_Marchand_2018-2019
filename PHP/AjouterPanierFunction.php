<?php
	session_start();
	
	if(isset($_POST)){
		
		$nbArticle=$_POST['nbArticle'];
		$noClient=$_SESSION['noClient'];
	
		if(!empty($nbArticle)){
			if(!mysqli_num_rows(mysqli_query($bdd, "SELECT * FROM composer WHERE noArticle='$noArticle' AND noCommande='$noClient';"))){
				//$requete2 = mysqli_query($bdd, "INSERT INTO commande(noCommande, dateCommande, noClient) VALUES(".$noClient.",'". date("Y:m:d")."', ".$noClient.")");
				$requete = mysqli_query($bdd, "INSERT INTO composer(noCommande, noArticle, nbArticle) VALUES(".$noClient.", ".$noArticle.", ".$nbArticle.");");
				//echo "INSERT INTO commande(noCommande, dateCommande, noClient) VALUES(".$noClient.",". date("Y:m:d").", ".$noClient.")";
			}
			else{
				$requete = mysqli_query($bdd, "UPDATE composer SET nbArticle = '$nbArticle' WHERE noCommande = '$noClient' && noArticle = '$noArticle';");
			}
		}
		else
			echo "err1";
	}
	else
		echo "err2";
	header ('Location: ../Boutique.php');
?>