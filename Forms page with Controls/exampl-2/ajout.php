<?php
mysql_connect("localhost","root","") or die(mysql_error()) ;
mysql_select_db("bac2014_8h") or die(mysql_error()) ;
$mat  =	 $_POST["m"] ;
$n	  =  $_POST["n"] ;
$p    =  $_POST["p"] ;

$req = "SELECT * FROM `patient` WHERE `mat`=$mat" ;

$res = mysql_query($req) or die(mysql_error()) ;

if( mysql_num_rows($res) != 0 ){
	echo("<h1 align='center'><font face='Blackadder ITC' size='7' color='#00FF00'><i>
********* patient existe deja **********</i></font></h1>") ; return false ;}

			else

	$req1 = "INSERT INTO `patient` (`mat`, `nom`, `prenom`) VALUES ('$mat' , '$n' , '$p') ; " ;
	mysql_query($req1) or die(mysql_error()) ;
 
	if(mysql_affected_rows()){
		echo("<h1 align='center'><font face='Blackadder ITC' size='7' color='#00FF00'><i>
********* l'operation Resuite ! **********</i></font></h1>") ;}

?>
