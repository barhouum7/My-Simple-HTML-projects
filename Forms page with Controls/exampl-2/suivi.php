<meta charset="UTF-8">

<?php
@mysql_connect("localhost","root","") or die (mysql_error());
@mysql_select_db("bd2014_8h") or die (mysql_error());


$d=date("Y-m-d");

// Tester l'existance de la matricule dans la base

$req = "SELECT nom, prenom ,dateCons, DetailCons
		FROM `consultation` C, `patient` P
		WHERE P.mat = C.mat and `DateRDV` ='$d';";

$res=mysql_query($req) or die (mysql_error());
if(mysql_num_rows($res)==0){
	echo "<b>Pas de rendez-vous pour aujourd\'hui ! </b>";

} else{
	   echo "<h1 align='center'><font color='blue'>Liste des patients ayant un rendez-vous pour le $d</font></h1>";
	?>
		<table width="60%" border="1" align="center">
		  <tr bgcolor="#33FFCC" align="center">
		    <td><b>Nom</b></td>
		    <td><b>Prénom</b></td>
		    <td><b>Date de la Consultation</b></td>
		    <td><b>Détail de la Consultation</b></td>
		  </tr>
	<?  
		while($ligne=mysql_fetch_array($res)) {
	?>
		  <tr align="center">
		    <td><? echo $ligne["nom"];			?></td>
		    <td><? echo $ligne["prenom"];		?></td>
		    <td><? echo $ligne["dateCons"];		?></td>
		    <td><? echo $ligne["DetailCons"];	?></td>
		  </tr>
     <? } ?>	
	  </table>
<? 	
	}
 mysql_close(); 
?>  
<p><a href="index.html">Accueil</a></p>