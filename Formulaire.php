<?php session_start();
include "PHP/connexion.php" 
?>
<html lang="fr">
  <head>
    <meta charset="utf-8">
    <title> YWR | Formulaire </title>
    <link rel="stylesheet" href="CSS/Formulaire.css" type="text/css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.1/css/all.css">
	<link rel="shortcut icon" type="image/png" href="IMG/faveicone.png"/>
    <script type="text/javascript" src="js/formulaire.js"> </script>
  </head>
    <body>
	<div class="back">
		<a href="Accueil.php"><p> Retour </p></a>
	</div>
	<?php
						if(!isset($_SESSION['utilisateur'])){
							$display="none";
							$h1="Formulaire d'adhésion";
						}
						else{ 
							$display="block";
							$h1="Profil utilisateur";
							if(mysqli_num_rows(mysqli_query($bdd, "SELECT * FROM client WHERE utilisateur='".$_SESSION['utilisateur']."' && noRole=1;"))){
								$display2="block";
							}
							else{
								$display2="none";
							}
						}
					?>
	<div <?php echo "style='display : $display'" ?>>
		<form action="PHP/deconnexion.php" method="POST">
			<input type="submit" value="deconnexion" name="deconnexion" class="back" style='background-color: red; color: white; border-style: none; height: 57px; width: 150px; opacity: 0.9; cursor : pointer; <?php echo "display: '$display1'" ?>'/>
		</form>
		<form action="Backoffice.php" method='POST'>
			<input type='submit' value='backoffice' name='backoffice'class="back" style='background-color: green; color: white; border-style: none; height: 57px; width: 150px; opacity: 0.9; cursor : pointer; <?php echo "display: $display2" ?>'/>
		</form>
	</div>
	
	  <div class="contact-form">
        <?php echo "<h1> $h1 </h1>" ?>
		
		<form action="PHP/inscriptionModification.php" method="POST">
		
		<div class="textb">
			<label> Civilité : </label>
			<div class="list">
			  <ul>
				  <li><label> Mr.</label> <input type="radio" name="civilite" value="monsieur" <?php if(isset($_SESSION['civilite']) && $_SESSION['civilite'] == "monsieur"){ echo "checked"; } ?> required> </li>
				  <li><label> Mme. </label> <input type="radio" name="civilite" value="madame" <?php if(isset($_SESSION['civilite']) && $_SESSION['civilite'] == "madame"){ echo "checked"; } ?>></li>
				  <li><label> Non Binaire </label> <input type="radio" name="civilite" value="non binaire" <?php if(isset($_SESSION['civilite']) && $_SESSION['civilite'] == "non binaire"){ echo "checked"; } ?>></li>
			  </ul>
			</div>
        </div>
		
        <div class="textb">
          <label> Nom : </label>
          <input type="text" name="nom" value="<?php if(isset($_SESSION['nom'])){ echo $_SESSION['nom']; } else{ echo ""; }?>" placeholder="Entrez votre nom" required>
        </div>

        <div class="textb">
          <label> Prénom : </label>
          <input type="text" name="prenom" value="<?php if(isset($_SESSION['prenom'])){ echo $_SESSION['prenom']; } else{ echo ""; }?>" placeholder="Entrez votre prénom" required>
        </div>

        <div class="textb">
          <label> Email : </label>
          <input type="text" name="email" value="<?php if(isset($_SESSION['email'])){ echo $_SESSION['email']; } else{ echo ""; }?>" placeholder="Entrez votre adresse mail" required>
        </div>

        <div class="textb">
          <label> Téléphone : </label>
          <input type="text" name="telephone" value="<?php if(isset($_SESSION['telephone'])){ echo $_SESSION['telephone']; } else{ echo ""; }?>" placeholder="Entrez votre numero de téléphone">
        </div>

        <div class="textb">
          <label> Adresse postale : </label>
          <input type="text" name="adresse" value="<?php if(isset($_SESSION['adresse'])){ echo $_SESSION['adresse']; } else{ echo ""; }?>" placeholder="Entrez votre adresse postale">
        </div>
		
		<div class="textb">
          <label> Ville : </label>
          <input type="text" name="ville" value="<?php if(isset($_SESSION['ville'])){ echo $_SESSION['ville']; } else{ echo ""; }?>" placeholder="Entrez votre ville">
        </div>
		
		<div class="textb">
          <label> Code postal : </label>
          <input type="text" name="cp" value="<?php if(isset($_SESSION['cp'])){ echo $_SESSION['cp']; } else{ echo ""; }?>" placeholder="Entrez votre code postal">
        </div>
		
		<div class="textb">
		  <label> Pays </label>
		  <SELECT name="pays" size="1">
			<OPTION value="<?php if(isset($_SESSION['pays'])){ echo $_SESSION['pays']; } else{ echo ""; }?>" selected><?php if(isset($_SESSION['pays'])){ echo $_SESSION['pays']; } else{ echo '-- Choix du pays --'; }?></OPTION>
			<OPTION value="Allemagne"> Allemagne </OPTION>
			<OPTION value="Belgique"> Belgique </OPTION>
			<OPTION value="Etats-Unis"> Etats-Unis </OPTION>
			<OPTION value="France"> France </OPTION>
			<OPTION value="Suisse"> Suisse </OPTION>
			<OPTION value="Autre"> Autre </OPTION>
		  </SELECT>
		</div>
		
		<div class="textb">
			<label> Nom d'utilisateur : </label>
			<input type="text" name="utilisateur" value="<?php if(isset($_SESSION['utilisateur'])){ echo $_SESSION['utilisateur']; } else{ echo ""; }?>" placeholder="Entrez votre nom d'utilisateur" required>
		</div>
		
		<div class="textb">
			<label> Mot de passe : </label>
			<input type="password" name="mdp" placeholder="Entrez votre mot de passe" required>
		</div>
		
		<div class="textb">
			<label> Confirmer le mot de passe : </label>
			<input type="password" name="cMdp" placeholder="Confirmer votre mot de passe" required>
		</div>
		
          <input type="submit" name="formulaireSubmit" value="soumettre" class="btn"></a>
      </div>

	  </form>
	  
      <div id="box">
        <span class="round"></span>
          <i class="fas fa-check"></i>
        <h1> Inscription terminée !  </h1>
        <a onclick="popup()" class="close" href="Accueil.php"> Retourner à l'accueil </a>
      </div>

    </body>
</html>
