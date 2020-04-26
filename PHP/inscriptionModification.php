<?php
	session_start();
	include "connexion.php";
	
	if(isset($_POST)){
		
		$nom=$_POST['nom'];
		$prenom=$_POST['prenom'];
		$email=$_POST['email'];
		$tel=$_POST['telephone'];
		$adr=$_POST['adresse'];
		$ville=$_POST['ville'];
		$cp=$_POST['cp'];
		$pays=$_POST['pays'];
		$utilisateur=$_POST['utilisateur'];
		$mdp=$_POST['mdp'];
		$cMdp=$_POST['cMdp'];
		$civil=$_POST['civilite'];
	
		if(!empty($nom) && !empty($prenom) && !empty($email) && !empty($utilisateur) && !empty($mdp) && !empty($cMdp)){
			if($mdp==$cMdp){
				$mdp=md5($mdp);
				if($bdd){
					if(!isset($_SESSION['utilisateur'])){
						if(mysqli_num_rows(mysqli_query($bdd, "SELECT * FROM client WHERE utilisateur='$utilisateur' OR email='$email';")) == 0){
							$resultat=mysqli_query($bdd, "INSERT INTO client(nom, prenom, email, telephone, adresse, ville, cp, pays, utilisateur, mdp, civilite, noRole) VALUES('$nom', '$prenom', '$email', '$tel', '$adr', '$ville', '$cp', '$pays', '$utilisateur', '$mdp', '$civil', 2)");
							$noClient=mysqli_fetch_assoc(mysqli_query($bdd, "SELECT * FROM client WHERE utilisateur='$utilisateur'"));
							$panier=mysqli_query($bdd, "INSERT INTO commande(noCommande, noClient) VALUES(".$noClient['noClient'].", ".$noClient['noClient'].");");
                            
						}
						else{
							header ('Location: ../Formulaire.php');
						}
					}
					else{
						$resultat=mysqli_query($bdd, "UPDATE client SET nom = '$nom', prenom = '$prenom', email = '$email', telephone = '$tel', adresse = '$adr', ville = '$ville', cp = '$cp', pays = '$pays', utilisateur = '$utilisateur', mdp = '$mdp', civilite = '$civil' WHERE utilisateur = '".$_SESSION['utilisateur']."' AND mdp='".$_SESSION['mdp']."'");
						if(mysqli_num_rows(mysqli_query($bdd, "SELECT noClient FROM client WHERE utilisateur='$utilisateur' AND noClient IS NOT NULL;")))
							$panier=mysqli_query($bdd, "INSERT INTO commande(noCommande, noClient) VALUES('".$_SESSION['noClient']."', '".$_SESSION['noClient']."');");
					}
				}
				else{
					echo "erreur de connexion";
				}
			}
			else{
				echo "Mauvais mot de passe";
			}
		}
		else{
			echo "Tous les champs obligatoires ne sont pas remplis";
		}
	}
	header ('Location: ../Accueil.php');
?>