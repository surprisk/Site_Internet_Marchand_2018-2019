<?php session_start(); ?>
<html>
	<?php
	include "PHP/connexion.php"
	?>
	<head style="background: linear-gradient(to bottom, #45484d 0%,#000000 100%);">
		<meta charset='iso-8859-15'>
		<title>YWR | Boutique</title>
		<link rel="stylesheet" href="CSS/Popup.css"/>
		<link type="text/css" rel="stylesheet" media="all" href="CSS/style2.css" />
		<link type="text/css" rel="stylesheet" media="all" href="CSS/Style3.css" />
		<script type="text/javascript" src="js/navigation.js"> </script>
		<script type="text/javascript" src="js/popup.js"> </script>
		<link rel="shortcut icon" type="image/png" href="IMG/faveicone.png"/>
		<link type="text/css" rel="stylesheet" media="all" href="CSS/Principal.css" />
		<link rel="stylesheet" href="CSS/Formulaire.css"/>
		<link rel="stylesheet" href="http://use.fontawesome.com/releases/v5.6.3/css/all.css"/>
	</head>
	<body>
		<meta charset='iso-8859-15'>
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
			
			<!-- Popup article1 -->
			
			<div ID="blackScreena" onclick="popupConnection(true, 'article', 'a')">
			</div>
				<?php
					$noArticle="1";
					include "PHP/boutique.php";
				?>
			<div ID="articlePopupa" class="animationArticle">
				<h1 style="margin-left:20px;"> <?php echo "$nomArticle"; ?> </h1>
				<div ID="conteneur-flex">
					<div ID="desc-produit">
						<div ID="desc-image">
							<?php
							echo "<img SRC='".$imgArticle."' alt='product'/>";
							?>
						</div>
						<div ID="desc-desc">
							<?php
								echo "<p> $descArticle <p>";
							?>
						</div>
					</div>
					<div ID="buy-produit">
						<p class="prix2">
							Prix TTC :
							<span style="margin-left: 20px; font-size: 30px; font-style: italic"><?php echo "$prix &#128;" ?></span>
						</p>
						<form method="post" action="PHP/AjouterPanierArt1.php">
						<div class="qte2">
						Quantit&#233; <input name="nbArticle" type="number" min="1" max="99">
						</div>
						<div style="margin-top: 10px;" ID="paniersubmita" class="btn" onclick="popupConnection(true, 'article')">
							<button type="submit" style="background-color: transparent;">Ajouter au panier</button>
							<img style="width: 50px; height:50px; float: left; margin-left: 5px; margin-top: -55px" src="IMG/Shopping Basket.png" alt="Ceci n'est pas un panier"/>
						</div>
						</form>
					</div>
				</div>
			</div>
			
			<!-- Fin de Popup article1 -->
			
			<!-- Popup article2 -->
			
			<div ID="blackScreenb" onclick="popupConnection(true, 'article', 'b')">
			</div>
				<?php
					$noArticle="2";
					include "PHP/boutique.php";
				?>
			<div ID="articlePopupb" class="animationArticle">
				<h1 style="margin-left:20px;"> <?php echo "$nomArticle"; ?> </h1>
				<div ID="conteneur-flex">
					<div ID="desc-produit">
						<div ID="desc-image">
							<?php
							echo "<img SRC='".$imgArticle."' alt='product'/>";
							?>
						</div>
						<div ID="desc-desc">
							<?php
								echo "<p> $descArticle <p>";
							?>
						</div>
					</div>
					<div ID="buy-produit">
						<p class="prix2">
							Prix TTC :
							<span style="margin-left: 20px; font-size: 30px; font-style: italic"><?php echo "$prix &#128;" ?></span>
						</p>
						<form method="post" action="PHP/AjouterPanierArt2.php">
						<div class="qte2">
						Quantit&#233; <input name="nbArticle" type="number" min="1" max="99">
						</div>
						<div style="margin-top: 10px;" ID="paniersubmitb" class="btn" onclick="popupConnection(true, 'article')">
							<button type="submit" style="background-color: transparent;">Ajouter au panier</button>
							<img style="width: 50px; height:50px; float: left; margin-left: 5px; margin-top: -55px" src="IMG/Shopping Basket.png" alt="Ceci n'est pas un panier"/>
						</div>
						</form>
					</div>
				</div>
			</div>
			
			<!-- Fin de Popup article2 -->
			
			<!-- Popup article3 -->
			
			<div ID="blackScreenc" onclick="popupConnection(true, 'article', 'c')">
			</div>
				<?php
					$noArticle="3";
					include "PHP/boutique.php";
				?>
			<div ID="articlePopupc" class="animationArticle">
				<h1 style="margin-left:20px;"> <?php echo "$nomArticle"; ?> </h1>
				<div ID="conteneur-flex">
					<div ID="desc-produit">
						<div ID="desc-image">
							<?php
							echo "<img SRC='".$imgArticle."' alt='product'/>";
							?>
						</div>
						<div ID="desc-desc">
							<?php
								echo "<p> $descArticle <p>";
							?>
						</div>
					</div>
					<div ID="buy-produit">
						<p class="prix2">
							Prix TTC :
							<span style="margin-left: 20px; font-size: 30px; font-style: italic"><?php echo "$prix &#128;" ?></span>
						</p>
						<form method="post" action="PHP/AjouterPanierArt3.php">
						<div class="qte2">
						Quantit&#233; <input name="nbArticle" type="number" min="1" max="99">
						</div>
						<div style="margin-top: 10px;" ID="paniersubmitc" class="btn" onclick="popupConnection(true, 'article')">
							<button type="submit" style="background-color: transparent;">Ajouter au panier</button>
							<img style="width: 50px; height:50px; float: left; margin-left: 5px; margin-top: -55px" src="IMG/Shopping Basket.png" alt="Ceci n'est pas un panier"/>
						</div>
						</form>
					</div>
				</div>
			</div>
			
			<!-- Fin de Popup article3 -->
			
			<!-- Popup article4 -->
			
			<div ID="blackScreend" onclick="popupConnection(true, 'article', 'd')">
			</div>
				<?php
					$noArticle="4";
					include "PHP/boutique.php";
				?>
			<div ID="articlePopupd" class="animationArticle">
				<h1 style="margin-left:20px;"> <?php echo "$nomArticle"; ?> </h1>
				<div ID="conteneur-flex">
					<div ID="desc-produit">
						<div ID="desc-image">
							<?php
							echo "<img SRC='".$imgArticle."' alt='product'/>";
							?>
						</div>
						<div ID="desc-desc">
							<?php
								echo "<p> $descArticle <p>";
							?>
						</div>
					</div>
					<div ID="buy-produit">
						<p class="prix2">
							Prix TTC :
							<span style="margin-left: 20px; font-size: 30px; font-style: italic"><?php echo "$prix &#128;" ?></span>
						</p>
						<form method="post" action="PHP/AjouterPanierArt4.php">
						<div class="qte2">
						Quantit&#233; <input name="nbArticle" type="number" min="1" max="99">
						</div>
						<div style="margin-top: 10px;" ID="paniersubmitd" class="btn" onclick="popupConnection(true, 'article')">
							<button type="submit" style="background-color: transparent;">Ajouter au panier</button>
							<img style="width: 50px; height:50px; float: left; margin-left: 5px; margin-top: -55px" src="IMG/Shopping Basket.png" alt="Ceci n'est pas un panier"/>
						</div>
						</form>
					</div>
				</div>
			</div>
			
			<!-- Fin de Popup article4 -->
			
			<!-- Popup article5 -->
			
			<div ID="blackScreene" onclick="popupConnection(true, 'article', 'e')">
			</div>
			<?php
				$noArticle="5";
				include "PHP/boutique.php";
			?>
			<div ID="articlePopupe" class="animationArticle">
				<h1 style="margin-left:20px;"> <?php echo "$nomArticle"; ?> </h1>
				<div ID="conteneur-flex">
					<div ID="desc-produit">
						<div ID="desc-image">
							<?php
								echo "<img SRC='".$imgArticle."' alt='product'/>";
							?>
						</div>
						<div ID="desc-desc">
							<p> 
							<?php
								echo "<p> $descArticle <p>";
							?>
							</p>
						</div>
					</div>
					<div ID="buy-produit">
						<p class="prix2">
							Prix TTC :
							<span style="margin-left: 20px; font-size: 30px; font-style: italic"><?php echo "$prix &#128;" ?></span>
						</p>
						<form method="post" action="PHP/AjouterPanierArt5.php">
						<div class="qte2">
						Quantit&#233; <input name="nbArticle" type="number" min="1" max="99">
						</div>
						<div style="margin-top: 10px;" ID="paniersubmite" class="btn" onclick="popupConnection(true, 'article')">
							<button type="submit" style="background-color: transparent;">Ajouter au panier</button>
							<img style="width: 50px; height:50px; float: left; margin-left: 5px; margin-top: -55px" src="IMG/Shopping Basket.png" alt="Ceci n'est pas un panier"/>
						</div>
						</form>
					</div>
				</div>
			</div>
			
			<!-- Fin de Popup article5 -->
			
			<div style= "margin-top:100; font-family: ">
				<div class="border-text">
					<h3>Gurkha</h3>
				</div>
				<br>
				<div class="conteneur-article">
					<div class="article" onclick="popupConnection(false, 'article', 'a')">
						<img src="IMG/Product/Product1.png" class="image" title="Ces cigares pure tabac sont livrés par dans une boite a l'aspect militaire et couteau. De quoi ravire les collectionneur" >
						<p class="texte">
							Gurkha Spec ops
						</p>

						<p class="prix">
							209,99&#128;
						</p>
					</div>
					<div class="qte">
						<form action="PHP/AjouterPanierArt1.php" method="post">
							Quantit&#233; <input name="nbArticle" type="number" min="1" max="99">
							<button type="submit" class="acheter">Acheter</button>
						</form>
					</div>
				</div>
				<div class="conteneur-article">
					<div class="article" onclick="popupConnection(false, 'article', 'b')">
						<img src="IMG/Product/Product2.png" class="image" title="Ce n'est pas pour rien si ce cigare porte le nom du celebre conquerant asiatique. Inhalé la fumé du cigar permettra de vous donner l'envie d'écraser la concurrence ">
						<p class="texte">
							Gurkha Gengis Khan
						</p>
						<p class="prix">
							299,99&#128;
						</p>
					</div>
					<div class="qte">
						<form action="PHP/AjouterPanierArt2.php" method="post">
							Quantit&#233; <input name="nbArticle" type="number" min="1" max="99">
							<button type="submit" class="acheter">Acheter</button>
						</form>
					</div>
				</div>
				<div class="conteneur-article">
					<div class="article" onclick="popupConnection(false, 'article', 'c')">
						<img src="IMG/Product/Product3.png" class="image" title="Ce cigar fort, raffiné, addouci grace aux extraits de vanilla, caramel et de noix vous laissera un gout doux en bouche tont en gardant">
						<p class="texte">
							Gurkha The Beauty
						</p>
						<p class="prix">
							599,99&#128;
						</p>
					</div>
					<div class="qte">
						<form action="PHP/AjouterPanierArt3.php" method="post">
							Quantit&#233; <input name="nbArticle" type="number" min="1" max="99">
							<button type="submit" class="acheter">Acheter</button>
						</form>
					</div>
				</div>
				<div class="border-text2">
					<h3>Cohiba</h3>
				</div>
				<br>
				<div class="conteneur-article">
					<div class="article" onclick="popupConnection(false, 'article', 'd')">
						<img src="IMG/Product/Product4.png" class="image" title="Dès les premières bouffées, la complexité aromatique surprend : les saveurs sont épicées, soutenues par des notes de poivre rose et de chocolat noir. Au fil de la dégustation, que l’on apprécie tant le tirage est bon, les arômes s’intensifient en laissant entrapparaître des touches de cuir. La maîtrise du roulage et du choix des feuilles est évidente pour ces vitoles de premier choix. Une magnifique pièce qui ravira les amateurs de havanes et les collectionneurs">
						<p class="texte">
							Cohiba Talisman Limited edition
						</p>
						<p class="prix">
							610,00&#128;
						</p>
						<br>
					</div>
					<div class="qte">
						<form action="PHP/AjouterPanierArt4.php" method="post">
							Quantit&#233; <input name="nbArticle" type="number" min="1" max="99">
							<button type="submit" class="acheter">Acheter</button>
						</form>
					</div>
				</div>
				
				<div class="conteneur-article">
					<div class="article" onclick="popupConnection(false, 'article', 'e')">
						<img src="IMG/Product/Product5.png" class="image" title="La boite la plus chere du monde. Créée pour le 40 eme aniversaire de la marque, cette boite de collection vous fera rentre dans le club fermé des riches assez riches pour se permettre de payer une boite 15000€ ">
						<p class="texte">
							Cohiba Behike 40th Anniversery
						</p>
						<p class="prix">
							15000&#128;
						</p>
						<br>
					</div>
					<div class="qte">
						<form action="PHP/AjouterPanierArt5.php" method="post">
							Quantit&#233; <input name="nbArticle" type="number" min="1" max="99">
							<button type="submit" class="acheter">Acheter</button>
						</form>
					</div>
				</div>
			</div>
		</div>
	</body>
</html>