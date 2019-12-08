function view_date()
{
	document.f.a.value = new Date().getFullYear() ;

}//Fin View_Date ! ツ


function verif()
{
	if(document.f.p.options.selectedIndex < 1)
		{alert("Choisir une ` Pièce ` SVP !!!") ; return false ;}

	if(document.f.s.options.selectedIndex < 1)
		{alert("Choisir une ` Salle ` SVP !!!") ; return false ;}


	jour  = f.j.value ;
	mois  = f.m.value ;
	annee = f.a.value ;

	if( jour == "" || isNaN(jour) || jour < 1 || jour > 31 )
		{alert("Jour invalide !!!!") ; return false ;}

	if( mois == "" || isNaN(mois) || mois < 1 || mois > 12 )
		{alert("Mois invalide !!!!") ; return false ;}

	switch( Number(mois) ) {
					case 1 : case 3 : case 5 : case 7 : case 8 : case 10 : case 12 : {
								if( jour == "" || isNaN(jour) || jour < 1 || jour > 31 )
									{alert("Date invalide !!!!") ; return false ;} ; break ;
					}

					case 4 : case 6 : case 9 : case 11 : {
								if( jour == "" || isNaN(jour) || jour < 1 || jour > 30 )
									{alert("Date invalide !!!!") ; return false ;} ; break ;
					}

					case 2 : {
								if( Number(annee) % 4 == 0 )
									{ nbj = 29 ; }
									else { nbj = 28 ; }

								if( jour == "" || isNaN(jour) || jour < 1 || jour > nbj )
									{alert("Date invalide !!!!") ; return false ;} ; break ;
					}


	}


}//Fin verif ! ツ