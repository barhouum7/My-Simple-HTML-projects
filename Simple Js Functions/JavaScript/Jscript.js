//Script de la page sublime..
 n = Number(prompt("Donner un entier strictement positif : ","0")) ;
 	var i = 1; var nb = 0; var sd = 0;
 	for(i = 1; i <= n; i++){
 		if( n % i == 0 ){
		 	document.write("<b><i>Les diviseurs de "+n+" sont : "+i+"</i></b><br><br>") ;
	 		nb = nb+1 ;
	 		sd = sd+i ;
	 	}
 	}
 	document.write("<font color='red'><b><i>Le nombre de ses diviseurs est : </font>"+nb+"</i></b><br>") ;
 	document.write("<font color='red'><b><i>Le somme de ses diviseurs est : </font>"+sd+"</i></b><br><br>") ;
 	//Est un nombre parfait ou non !...
 	function parfait(nb){
 		var s = 0;
 		for(i = 1; i <= nb; i++){
	 		if( nb % i == 0 )
		 		s = s+i ;
		}
		return(s=nb) ;
 	}

 	function parfait(sd){
 		var s = 0;
 		for(i = 1; i <= sd; i++){
	 		if( sd % i == 0 )
		 		s = s+i ;
		}
		return(s=sd) ;
 	}
 	if( parfait(nb) && parfait(sd) ){
 	document.write("<font color='red'><b><i>L'Entier "+n+" est Sublime ! </i></b></font><br>") ;}
 	else{
 	document.write("<font color='red'><b><i>L'Entier "+n+" n'est Sublime ! </i></b></font><br>") ;
 	}

 	
