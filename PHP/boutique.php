<?php
	include "connexion.php";

	$boutique = mysqli_query($bdd,"SELECT * FROM article WHERE noArticle='".$noArticle."'");
	if(mysqli_num_rows($boutique) == 1){
	
		while($articles = mysqli_fetch_assoc($boutique)){
			$prix = $articles['prix'];
			$nomArticle = $articles['nomArticle'];
			$descArticle = $articles['descArticle'];
			$imgArticle = $articles['imgArticle'];
			$stockArticle = $articles['stockArticle'];
		}
    }
    else{
        echo "Article incorrect";
    }
?>