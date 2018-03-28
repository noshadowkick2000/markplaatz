/*Welkomstbericht*/
function cLoad(){
	var iStage = Number(stage);
	switch(iStage){
		case 0:
			document.getElementById('nHEAD').innerHTML = "U bent nog niet ingelogd.";
			adjustLogin(0);
			break;
		;
		case 1:
			document.getElementById('nHEAD').innerHTML = "Welkom, " + usrn + ".";
			adjustLogin(1);
			break;
		;
		case 2:
			document.getElementById('nHEAD').innerHTML = "Registreren geslaagd.";
			adjustLogin(0);
			break;
		;
		case 3:
			document.getElementById('nHEAD').innerHTML = "Registreren mislukt.";
			adjustLogin(0);
			break;
		;
		default:
			document.getElementById('nHEAD').innerHTML = "Welkom bij Markplaatz.";
			adjustLogin(0);
			break;
		;
	}

}

/*Link naar inloggen of uitloggen veranderen*/
function adjustLogin(status){
	switch(status){
		case 0:
			document.getElementById('login').href = "login.php";
			document.getElementById('login').innerHTML = "Inloggen";
			break;
		;
		case 1:
			document.getElementById('login').href = "logout.php";
			document.getElementById('login').innerHTML = "Uitloggen";
			break;
		;
	}
}