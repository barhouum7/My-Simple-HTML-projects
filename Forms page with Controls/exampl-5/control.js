function chargerDate() {

	var tm = ["Janv" , "Fév" , "Mars" , "Avril" , "Mai" , "Juin" , "Juiller" , "Août" , "Septembre" , "October" , "Novembre" , "Décembre"] ;
        
		for(i = 1; i <= 31; i++)
			f.j.options[f.j.length] = new Option(i,i) ;


		for(i = 0; i < 12; i++)
			f.m.options[f.m.length] = new Option(tm[i] , tm[i]) ;

		var y = new Date().getFullYear() ;
		for(i = 1900; i <= y ; i++)
			f.a.options[f.a.length] = new Option(i,i) ;
}//Fin chargerDate() *********************************************************************************************************

function verif() {
	nom = f.n.value ;									mat = f.ma.value ;
	pren = f.p.value.toUpperCase() ;					cin = f.c.value ;
	
	nbenf = f.nbe.value ;							telfn = f.tel.value ;
	email = f.em.value ;							adress = f.adr.value.toUpperCase() ;
    
	if(mat == ""){alert("Tous les champs doit être non vide (Matricule) !");return false;}
	if(mat.length != 8){alert("Longeur de Matricule invalide !");return false;}
    
	if( mat.charAt(0) < "A" || mat.charAt(0) > "Z" || mat.charAt(1) < "A" || mat.charAt(1) > "Z" )
			{alert("Matricule doit commance par deux lettres << majusclule >> !");return false;}
				//Matricule doit être une chaîne majusclule !						

	//ch = mat.substr(2) ;
	for(i = 2; i < mat.length; i++){
		if( mat.charAt(i) < "0" || mat.charAt(i) > "9")
			{alert("Matricule doit comport 6 chiffres !");return false;}
	}//Fin verif Matricule ! *******************************************************************************************
	
	if( cin == "" ){alert("Tous les champs doit être non vide (NCIN) !");return false;}//NCIN Obligatoir !!
	if(cin.length != 8){alert("Longeur de NCIN invalide !");return false;}//TEST au niveau de longeur !!

	for(i = 0; i < cin.length; i++ ){
		if( cin.charAt(i) < "0" || cin.charAt(i) > "9" )
			{alert("Le CIN doit être numérique !! "); return false ;}
	}//TEST pour le CIN doit être numérique !!

	if(cin.charAt(0) != "0" && cin.charAt(0) != "1" )
		{alert("Votre CIN doit commance par 0 ou 1 !");return false;}//Commance par 0 ou 1 !!

	//Fin verif CIN ! ***************************************************************************************************

	if( nom == "" ){alert("Tous les champs doit être non vide (Nom) !");return false;}//Nom Obligatoir !!
	for(i = 0; i < nom.length; i++){
		if( nom.charAt(i) < "A" || nom.charAt(i) > "Z" )
			{alert("Nom doit être une chaîne alphabétique << Majuscule >> !"); return false ;}//TEST au niveau de Nom !!
	}//Fin verif Nom ! *********************************************************************************************************

	
	if( pren == "" ){alert("Tous les champs doit être non vide (Prénom) !");return false;}//Prénom Obligatoir !!
	for(i = 0; i < pren.length; i++){
		if( pren.charAt(i) < "A" || pren.charAt(i) > "Z" )
			{alert("Prénom doit être une chaîne alphabétique !"); return false ;}//TEST au niveau de Prénom !!
	}//Fin verif Prénom ! *********************************************************************************************************
    
     if( !(f.j.options.selectedIndex) || !(f.m.options.selectedIndex) || !(f.a.options.selectedIndex) )
        {alert("Le choix de la Date de naissance est obligatoir !!"); return false ;}
    //Fin verif Date de naissance !! *********************************************************************************************
    
    if( f.s[0].checked == false && f.s[1].checked == false ){alert("SVP Choisir votre sexe !! ");return false;}
    //Fin verif Sexe !! *****************************************************************************************************
    
    if( f.ec[0].checked == false && f.ec[1].checked == false && f.ec[2].checked == false )
        {alert("Le choix de l'état civil est obligatoir !!"); return false ;}
    //Fin verif Etat civil !! *********************************************************************************************
    
	if( nbenf == "" ){alert("Tous les champs doit être non vide (NB Enfant) !");return false;}
    //!( Number(nbenf) )
	//if( isNaN(nbenf) ){alert("NB Enfant assurée doit être contenir une valeur numérique entre 0 et 9 ! ..."); return false ;}
    
    for(i = 0; i < nbenf.length; i++ ){
		if( nbenf.charAt(i) < "0" || nbenf.charAt(i) > "9" )
			{alert("NB Enfant assurée doit être contenir une valeur numérique entre 0 et 9 !"); return false ;}
	}
    
		if( f.ec[1].checked == true && f.ec[2].checked == true ||
						 ( (nbenf.length != 2 || nbenf.charAt(0) != "0") && nbenf.length != 1 ))
			{alert("NB Enfant assurée doit être contenir une valeur entre 0 et 9 !"); return false ;}//TEST au niveau de NBenf !!

	if( f.ec[0].checked == true ) {
			 if( nbenf != "00" && nbenf != "0" ){
			alert("Le champ NB Enfant assurée doit obligatoirement NULL !! ( Vous ête célibataire ou non ? )   ` 0 ` ");return false;
	}}//Fin verif NBenf ! *********************************************************************************************************
    
    if( !(f.ta.options.selectedIndex) )
        {alert("Le choix de type d'assurance est obligatoir !!"); return false ;}
    //Fin verif Type d'assurance !! *********************************************************************************************
    
	if( email == "" ){alert("Tous les champs doit être non vide (E-mail) !");return false;}
	if( email.indexOf(' ') > 0 ){alert("Tapez une adresse e-mail valide SVP ( Ne contient pas des espaces . ) !!");return false;}
	
    if( email.indexOf('@') == -1 || email.lastIndexOf('.') == -1 )
        {alert("Tapez une adresse e-mail valide SVP ( Example : kivin85@gmail.com . ) Il doit contient `@` et `.`  !!");return false;}

    if( (email.indexOf('.') != email.lastIndexOf('.')) || (email.indexOf('@') != email.lastIndexOf('@')) ||
       ( email.indexOf('@') > email.lastIndexOf('.') ) )
        {alert("Tapez une adresse e-mail valide SVP ( Example : kivin85@gmail.com . ) Il doit contient une seul `@` et `.`  !!");return false;}
    
    if(email.charAt(email.length-4) != '.' && email.charAt(email.length-3) != '.')
        {alert("Tapez une adresse e-mail valide SVP ( Example : kivin85@gmail.com . ) OR ( Example : kivin85@gmail.tn . ) !!");return false;}
    
//Fin verif E-mail ( pfffffffffffffffffffffff !!!!!! ) ****************************************************************************************************
    
    if( adress == "" ){alert("Tous les champs doit être non vide (Adresse) !");return false;}//Adresse Obligatoir !!
	if( adress.length >= 25 )
		{alert("Votre adresse doit contenir au minimum 25 caractères !"); return false ;}//TEST au niveau de longeur de l'adresse !!
	
	for(i = 0; i < adress.length; i++){
		if(adress.charAt(i) < "A" || adress.charAt(i) < "Z" )
			{alert("Adresse doit être une chaîne alphabétique !"); return false ;}
	}

	if( !(Number(adress.charAt(0) || adress.charAt(1) )) )
		{alert("Adresse doit commance par deux chiffres !!"); return false ;}
	//Fin verif Adresse ! *********************************************************************************************************
	
	if( telfn == "" ){alert("Tous les champs doit être non vide (Téléphone) !");return false;}
    //!( Number(telfn) )
	if( isNaN(telfn) ){alert("Le numéro de téléphone doit être une valeur numérique !"); return false ;}
    if(telfn.length != 8){alert("Longeur de téléphone invalide !");return false;}//TEST au niveau de longeur !!
    if( telfn.charAt(0) != '2' && telfn.charAt(0) != '9' && telfn.charAt(0) != '4' &&
       telfn.charAt(0) != '7' && telfn.charAt(0) != '5' ){alert('Numéro de téléphone invalide !!');return false;}
	//Fin verif Téléphone ! ****************************************************************************************************
        

}//Fin verif() !