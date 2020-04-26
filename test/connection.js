function popupConnection(param){
	submit=document.getElementById('submit');
	loginPopup=document.getElementById('loginPopup');
	blackScreen=document.getElementById('blackScreen');
	alert(param);
	if(param == true){
		submit.style.display = 'none';
		loginPopup.style.display = 'none';
		blackScreen.style.display = 'none';
		alert("1");
	}
	else{
		submit.style.display = 'block';
		loginPopup.style.display = 'block';
		blackScreen.style.display = 'block';
		alert("2");
	}
}