function date(){

for( i = 1 ; i <= 31 ; i++){
	f.j.options[f.j.length] = new Option(i,i) ;
}

for( i = 1 ; i <= 12 ; i++){
	f.m.options[f.m.length] = new Option(i,i) ;
}

d = new Date();
for( i = 1900 ; i <= d.getFullYear() ; i++){
	f.a.options[f.a.length] = new Option(i,i) ;
}
}/*Fin Date */