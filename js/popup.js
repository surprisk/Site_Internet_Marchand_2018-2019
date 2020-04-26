function popupConnection(param, type, n){
	if(type=="login"){
		submit=document.getElementById('submit');
		loginPopup=document.getElementById('loginPopup');
		blackScreen=document.getElementById('blackScreen');
		if(param == true){
			submit.style.display = 'none';
			loginPopup.style.display = 'none';
			blackScreen.style.display = 'none';
		}
		else{
			submit.style.display = 'block';
			loginPopup.style.display = 'block';
			blackScreen.style.display = 'block';
		}
	}
	
	if(type=="article"){
		paniersubmit=document.getElementById('paniersubmit'+n);
		articlePopup=document.getElementById('articlePopup'+n);
		blackScreen=document.getElementById('blackScreen'+n);
		if(param == true){
			paniersubmit.style.display = 'none';
			articlePopup.style.display = 'none';
			blackScreen.style.display = 'none';
		}
		else{
			paniersubmit.style.display = 'block';
			articlePopup.style.display = 'block';
			blackScreen.style.display = 'block';
		}
	}
}
