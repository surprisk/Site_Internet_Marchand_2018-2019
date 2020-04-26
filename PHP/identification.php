<?php
	session_start();
    include ("connexion.php");
	
	if($bdd){
		if(!empty($_POST)){
		
			$utilisateur = $_POST['utilisateur'];
			$mdp = md5($_POST['mdp']);
                            
			$resultat = mysqli_query($bdd, "SELECT * FROM client WHERE utilisateur = '$utilisateur' AND mdp = '$mdp'");

			mysqli_num_rows($resultat);
			if(mysqli_num_rows($resultat) == 1){
				while($donnees = mysqli_fetch_assoc($resultat)){
					$_SESSION['noClient'] = $donnees['noClient'];
					$_SESSION['nom'] = $donnees['nom'];
					$_SESSION['prenom'] = $donnees['prenom'];
					$_SESSION['ville'] = $donnees['ville'];
					$_SESSION['cp'] = $donnees['cp'];
					$_SESSION['adresse'] = $donnees['adresse'];
					$_SESSION['civilite'] = $donnees['civilite'];
					$_SESSION['email'] = $donnees['email'];
					$_SESSION['telephone'] = $donnees['telephone'];
					$_SESSION['pays'] = $donnees['pays'];
					$_SESSION['utilisateur'] = $donnees['utilisateur'];
					$_SESSION['mdp'] = $donnees['mdp'];
					}
					
				header('Location: ../Formulaire.php');
			}
			else{
				echo "Erreur de l'identification";
				header('Location: ../Accueil.php');
			}
		}
	}
?>