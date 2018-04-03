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
			document.getElementById('nHEAD').innerHTML = "Welkom op de Markplaatz, <b>" + usrn + "</b>.";
			adjustLogin(1);
			break;
		;
		case 2:
			document.getElementById('nHEAD').innerHTML = "Registreren geslaagd.";
			adjustLogin(2);
			break;
		;
		case 3:
			document.getElementById('nHEAD').innerHTML = "Registreren mislukt.";
			adjustLogin(3);
			break;
		;
		case 4:
			document.getElementById('nHEAD').innerHTML = "Inloggen mislukt.";
			adjustLogin(4);
			break;
		;
		default:
			document.getElementById('nHEAD').innerHTML = "Welkom bij Markplaatz.";
			adjustLogin(5);
			break;
		;
	}

}

/*Link naar inloggen of uitloggen veranderen*/
function adjustLogin(status){

	var state = 0;

	if (status == 1 && status == 2 && status == 3 && status == 4 && status == 5){
		state = 0;
	}else{
		state = 1;
	}

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