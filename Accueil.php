<?php session_start() ?>
<html>
	<head style="background: linear-gradient(to bottom, #45484d 0%,#000000 100%);">
		<meta charset='utf-8'>
		<title>YWR | Accueil</title>
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
				<a style="float:left; margin-top:-55;" href="Accueil.php"><img src="IMG/logo1.PNG"></a>
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
			
			<!-- Slider avec css -->
			
			<link rel="stylesheet" type="text/css" href="CSS/Slider.css">
			<div id="slider" >
				<figure>
				<img src="IMG/Slider/IMG-Slider1.jpg">
				<img src="IMG/Slider/IMG-Slider2.jpg">
				<img src="IMG/Slider/IMG-Slider3.jpg">
				<img src="IMG/Slider/IMG-Slider4.jpg">
				<img src="IMG/Slider/IMG-Slider1.jpg">
				</figure>	
			</div>
				
			<!-- Fin de slider avec css -->
			<div ID="div-presentation">
				<CENTER><A HREF="#bas"><IMG ID="fleche" SRC="IMG/Fleche_Bas.png"></A></CENTER>
			</div>
			<div ID="div-text">
				<center>
				<div class="divtext">
					<img style="width: 350px; height: 300px; margin-top: -30px" src="IMG/logo1.PNG"> 
					<div style="float: right; margin-right: 100px; margin-top: 75px">
						<p style="font-family: 'Courier New'; font-size: 50px;"> Young, Wild and Rich </p> <p style="font-family: 'Courier New'; font-size: 20px; float: right; margin-top: -50px"> by Kevin Carbeti & Samuel Brosse </p>
					</div>
					<div style="margin-left: 400px; margin-right: 50px">
						<p style="font-family: 'Courier New'"> Depuis 1969, Young wild and rich est la référence pour acheter des cigares sur internet.
Nos nombreux partenariats dans le monde du cigare mais egalement dans l'univers des affaires nous permettent ainsi de proposer à nos clients des produits de qualités.
Actuellement seul les cigares Gurkha et Cohiba sont en vente sur le site en raison de la qualité de leurs produits. Cependant, nous pouvons traiter les demandes des clients qui souhaiteraient acquérir d'autres marques. Pour cela, il suffit de nous envoyer un mail à l'adresse suivante : youngwildandrich@support.com
L'equipe YWR vous souhaite une bonne navigation sur son site et reste à votre entière disposition pour d'éventuelles questions.</p>
					<div style="background-color: white; opacity: 0.6; float: left;  border-radius: 10px">
						<p style="color: black; margin-left: 10px; margin-right: 10px;"> Notre numéro : 06 69 69 22 04 </p>
					</div>
					</div>
				</div>
				</center>
			</div>
		</div>
		<div ID="bas">
		</div>
	</body>
</html>