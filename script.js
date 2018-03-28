function cLoad(){
	alert(stage);
	switch(stage){
		case 0:
			alert("U bent niet ingelogd.");
			/*document.getElementById('nHEAD').innerHTML = "U bent nog niet ingelogd.";*/
			break;
		;
		case 1:
			alert("U bent ingelogd. Welkom, " + usrn);
			/*document.getElementById('nHEAD').innerHTML = "Welkom, " + usrn;*/
			break;
		;
		case 2:
			alert("Registreren geslaagd.");
			/*document.getElementById('nHEAD').innerHTML = "Registreren geslaagd.";*/
			break;
		;
		case 3:
			alert("Registreren mislukt.");
			/*document.getElementById('nHEAD').innerHTML = "Registreren mislukt.";*/
			break;
		;
		default:
			alert("Default message");
		;
	}

}
