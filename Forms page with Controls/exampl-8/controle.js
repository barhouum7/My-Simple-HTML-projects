function verifAjouter() {
	
	cin = document.f.T1.value;
	

/* Validité de cin : 
   doit être composé de 8chiffres dont le premier est "0" ou "1" */	
ok=true;
for (i = 0; i < cin.length ; i++) {
	if (cin.charAt(i)<"0" || cin.charAt(i)> "9") {
		ok = false ;
		break;
	}
}

if( ok == false || cin.length != 8 || (cin.charAt(0) != "0" && cin.charAt(0) != "1") ) {

	alert("Svp Donnez un numéro CIN Valide ! ") ;
	return false;
}

/*La sélection d'un titre est obligatoire*/
if(document.f.D1.selectedIndex == 0) {

	alert("Svp Sélectionnez un Titre ! ") ;
	return false;
}

/*La sélection d'une durée est obligatoire*/
if(document.f.R1[0].checked == false && document.f.R1[1].checked == false && document.f.R1[2].checked == false) {

	alert("Svp Sélectionnez une durée ! ") ;
	return false;
}

}


/* Fonction pour tester la validité du formulaire de la page Modifier.html */

function verifModifier() {
	
	cin = document.f.T1.value;
	adr = document.f.S1.value;

/* Validité de cin : 
   doit être composé de 8chiffres dont le premier est "0" ou "1" */	
ok=true;
for (i = 0; i < cin.length ; i++) {
	if (cin.charAt(i)<"0" || cin.charAt(i)> "9") {
		ok = false ;
		break;
	}
}

if( ok == false || cin.length != 8 || (cin.charAt(0) != "0" && cin.charAt(0) != "1") ) {

	alert("Svp Donnez un numéro CIN Valide ! ") ;
	return false;
}

if(adr == "") {

	alert("Svp Saisissez la nouvelle adresse de l'abonné ! ") ;
	return false;
}

}