function verif(){
	nom = f.n.value ;									mat = f.ma.value ;
	pren = f.p.value.toUpperCase() ;					cin = f.c.value ;

	nbenf = f.nbe.value ;

	if(mat == ""){alert("Tous les champs doit être non vide (Matricule) !");return false;}
	if(mat.length != 10){alert("Matricule invalide (Doit contenir une valeur de 10 chiffres) !");return false;}
    if( isNaN(mat) )
		{alert("Matricule doit être numérique !");return false;}
    //Fin verif Matricule ! *******************************************************************************************

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

    //Fin verif Nom ! *********************************************************************************************************


	if( pren == "" ){alert("Tous les champs doit être non vide (Prénom) !");return false;}//Prénom Obligatoir !!

    //Fin verif Prénom ! *********************************************************************************************************

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
						 ( (nbenf.length != 2 || nbenf.charAt(0) != '0' ) && nbenf.length != 1 ))
			{alert("NB Enfant assurée doit être contenir une valeur entre 0 et 9 !"); return false ;}//TEST au niveau de NBenf !!

	if( f.ec[0].checked == true ){
			 if( nbenf != "00" && nbenf != "0" ){
			     alert("Le champ NB Enfant assurée doit obligatoirement NULL !! ( Vous ête célibataire ou non ? )   ` 0 ` ");return false;
	}}//Fin verif NBenf ! *********************************************************************************************************

    if( f.ta.selectedIndex == -1 )
        {alert("Le choix de type d'assurance est obligatoir !!"); return false ;}
    //Fin verif Type d'assurance !! *********************************************************************************************

}//Fin verif() !!


function valider(){
    mat = f.ma.value ;
    dsoin = f.ds.value ;
    msoin = f.ms.value ;

    if(mat == ""){alert("Tous les champs doit être non vide (Matricule) !");return false;}
	if(mat.length != 10){alert("Matricule invalide (Doit contenir une chaine de 10 chiffres) !");return false;}
    if( isNaN(mat) )
		{alert("Matricule doit être numérique !");return false;}
    //Fin valider Matricule ! *******************************************************************************************

    if(dsoin == ""){alert("Tous les champs doit être non vide (Date du soin) !");return false;}
	if(dsoin.length != 10){alert("Date du soin invalide (Doit contenir une chaine de 10 caractères) !");return false;}
    //Fin valider Date ! *******************************************************************************************

    if(msoin == ""){alert("Tous les champs doit être non vide (Matricule) !");return false;}
    for(i = 0; i < msoin.length; i++ ){
		if( msoin.charAt(i) < "0" || msoin.charAt(i) > "9" )
            {alert("Montant du soin doit contenir une valeur strictement positive !");return false;}}
    //Fin valider Montant du soin ! *******************************************************************************************
}//Fin valider() !!


function tester(){
        mat = f.ma.value ;
    if(mat == ""){alert("Tous les champs doit être non vide (Matricule) !");return false;}
	if(mat.length != 10){alert("Matricule invalide (Doit contenir une valeur de 10 chiffres) !");return false;}
    if( isNaN(mat) )
		{alert("Matricule doit être numérique !");return false;}
    //Fin valider Matricule ! *******************************************************************************************
}//Fin tester() !!






