<?php

mysql_connect("localhost","root","") or die (mysql_error());
mysql_select_db("bd2014_10h") or die (mysql_error());

// Recupération des données

$cin = $_POST["T1"];
$adr = $_POST["S1"];

// Tester l'existance de l'abonné dans la base 

$req1="SELECT * FROM `abonne` WHERE `cin` = '$cin';";
$res1 = mysql_query($req1) or die (mysql_error());

if(mysql_num_rows($res1) == 0) {
echo "<b>Aboné inexistant !</b>";

} else {
		 $req2="UPDATE `abonne` 
		 		SET `Adresse` = '$adr' 
		 		WHERE `cin` = '$cin'; ";

		 $res2 = mysql_query($req2) or die (mysql_error());

		 if($res2) {
		 	 echo "<b>Opération effectuée avec succèes !</b>";
		 }	
	}
mysql_close();	
?>

<html>
	<head><meta charset="UTF-8"></head>
	<body bgcolor="#6AE6FF"></body>
</html>