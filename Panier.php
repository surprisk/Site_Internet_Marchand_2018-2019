<?php session_start() ?>
<html>
	<head style="background: linear-gradient(to bottom, #45484d 0%,#000000 100%);">
		<meta charset='utf-8'>
		<title>YWR | Panier</title>
		<link type="text/css" rel="stylesheet" media="all" href="CSS/Style3.css" />
		<link type="text/css" rel="stylesheet" media="all" href="CSS/Principal.css" />
		<script type="text/javascript" src="js/navigation.js"> </script>
		<script type="text/javascript" src="js/popup.js"> </script>
		<link rel="shortcut icon" type="image/png" href="IMG/faveicone.png"/>
		<link rel="stylesheet" href="http://use.fontawesome.com/releases/v5.6.3/css/all.css"/>
		<link rel="stylesheet" href="CSS/Popup.css"/>
		<link type="text/css" rel="stylesheet" media="all" href="CSS/Formulaire.css" />

	</head>
	<body>
		<div ID="div-principale">
			<div ID="div-banner">
				<a style="float:left; margin-top:-55;" href="Accueil.html"><img src="IMG/logo1.PNG"></a>
				<ul>
					<li><a href="Accueil.php"><i class="fas fa-home"></i> Accueil</a></li>
					<?php
						if(!isset($_SESSION['utilisateur'])){
							$display1="block";
							$display2="none";
						}
						else{ 
							$display1="none";
							$display2="block";
						}
					?>
					<div <?php echo "style='display : $display1'" ?> ><li><a id="connection" onclick="popupConnection(false, 'login')"><i class="far fa-user" ></i> Connexion </a></li></div>
					<div <?php echo "style='display : $display2'"?> > <li><a href="Formulaire.php"><i class="far fa-user"></i> Mon Compte </a></li></div>
					<li><a href="Boutique.php"><i class="fas fa-store"></i> Boutique</a></li>
					<li><a href="Assistance.html"><i class="far fa-question-circle"></i> Assistance</a></li>
				</ul>
				<div ID="div-panier">
				<center>
					<a href="Panier.php"><p ID="text-panier" style="color:white;float:right; font-family : 'Trebuchet MS'; margin-top:10px; margin-right:20px; transition: opacity 0.3s"> Panier </p></a>
					<i style="float: right; margin-right: 5px; margin-top: 11px; color: #424242;" class="fas fa-shopping-basket"></i>
					<div ID="div-search">
						<i class="fas fa-search" style="float: left; margin-top: 7px; margin-left: 5px; opacity: 0.5;"></i>
						<input type="search" id="site-search" name="q"  placeholder="Rechercher..."/>
					</div>
				</div>
				</center>
			</div>
			
			
			<!-- Popup de connexion -->
			
			<div ID="blackScreen" onclick="popupConnection(true, 'login')">
			</div>
			<div ID="loginPopup" class="animationLogin">
				<form action="PHP/identification.php" method="POST">
					<h1> Connexion </h1>
					<div class="textb" style="margin-bottom: 25px; margin-top: 50px;"> 
					<label> Nom d'utilisateur : </label>
					<input type="text" name="utilisateur" placeholder="Entrez votre nom d'utilisateur"/>
					</div>
					<div class="textb" style="margin-bottom: 25px;"> 
					<label> Mot de passe utilisateur : </label>
					<input type="password" name="mdp" placeholder="Entrez votre mot de passe"/>
					</div>
					<label style="margin-left: 20px"> Se souvenir </label>
					<input type="checkbox" name="checked"/>
					<a href="Formulaire.php"> <label style="margin-left: 170px; cursor: pointer; font-style: italic;"> Inscription </label> </a>
					<input name="submitLogin" type="submit" ID="submit" value="Soumettre" class="btn" style="height: 50px; width: 200px;" onclick="popupConnection(true, 'login')"/>
				</form>
			</div>
			
			<!-- Fin de Popup de connexion -->
			
			<div ID="panier"> <?php include "PHP/panier.php"; ?> </div>
		</div>
	</body>
</html>