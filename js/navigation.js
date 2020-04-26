var navbar, panier;

window.onload = function() {
    navbar = document.getElementById("div-banner");
	panier = document.getElementById("div-panier");
}

window.onscroll = function() {
    changeNavbarStatement();
}

function changeNavbarStatement() {
    if (document.body.scrollTop > 77 || document.documentElement.scrollTop > 77) {
        navbar.style.opacity = 0.8;
        navbar.style.fontSize = "15.5px";
		panier.style.height = "39.5px";
		panier.style.width = "345px";
    }
    else {
        if (document.body.scrollTop == 0 || document.documentElement.scrollTop == 0) {
            navbar.style.opacity = 1;
            navbar.style.fontSize = "16px";
			panier.style.height = "40";
			panier.style.width = "350px";
        }
    }
}