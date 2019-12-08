function valider()
{

	mat=f.m.value;
	nom=f.n.value.toUpperCase();
	pren=f.p.value.toUpperCase();

	if (mat=="") {alert("SVP taper le matricule !!!"); return false;}
	if (mat.length!=4) {alert("Matricule invalide !!!"); return false;}
	for (var i = 0; i < mat.length; i++){
		if (mat.charAt(i)<"0" || mat.charAt(i)>"9")
			{alert("Matricule invalide !!!"); return false;}
	}

	if (nom=="") {alert("SVP taper votre nom !!!"); return false;}
	for (var i = 0; i < nom.length; i++) {
		if (nom.charAt(i)<"A" || nom.charAt(i)>"Z") {alert("Nom invalide !!!"); return false;}
	}

	if (pren=="") {alert("SVP taper votre prénom !!!"); return false;}
	for (var i = 0; i < pren.length; i++) {
		if (pren.charAt(i)<"A" || pren.charAt(i)>"Z") {alert("Prénom invalide !!!"); return false;}
	}

}//Fin valiiider() !!

function verif()
{

	mat=f.m.value;
	if (mat=="") {alert("SVP taper le matricule !!!"); return false;}
	if (mat.length!=4) {alert("Matricule invalide !!!"); return false;}

	det=f.d.value;
	if (det=="") {alert("SVP taper le détail !!!"); return false;}

	nbj_pj=f.pj.value;/*
	if (nbj_pj=="") {alert("SVP taper nombre de jours !!!"); return false;}
	for (var i = 0; i < nbj_pj.length; i++) {
		if (nbj_pj.charAt(i)<"0" || nbj_pj.charAt(i)>"9") {alert("nombre de jours invalide !!!"); return false;}
	}//Fin boucle FOR !!

	*/
	if (isNaN(nbj_pj) || nbj_pj<0 || nbj_pj=="") {alert("nombre de jours invalide !!!"); return false;}

}//Fin veriiff() !!


