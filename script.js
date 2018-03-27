function cLoad(){
	alert('test');
	alert(stage);
	switch(stage){
		case 0:
			document.getElementById('nHEAD').innerHTML = "U bent nog niet ingelogd.";
			break;
		;
		case 1:
			document.getElementById('nHEAD').innerHTML = "Welkom, " + usrn;
			break;
		;
		case 2:
			document.getElementById('nHEAD').innerHTML = "Registreren geslaagd.";
			break;
		;
		case 3:
			document.getElementById('nHEAD').innerHTML = "Registreren mislukt.";
			break;
		;
	}

}
