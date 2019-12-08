<?php

mysql_connect("localhost","root","") or die (mysql_error());
mysql_select_db("bd2014_10h") or die (mysql_error());

// Recupération des données

$cin = $_POST["T1"];
$CodeTitre = $_POST["D1"];
$nbm = $_POST["R1"];

$today = date("Y-m-d");   // Date courante 

// Tester l'existance de l'abonné dans la base 

$req1="SELECT * FROM `abonne` WHERE `cin` = '$cin';";
$res1 = mysql_query($req1) or die (mysql_error());

if(mysql_num_rows($res1) == 0) {
echo "<b> Aboné inexistant ! </b>";

} else {
 			$req2="SELECT * 
 				   FROM `abonnement` 
 				   WHERE `Cin` = '$cin' AND `Code` = '$CodeTitre' AND `DateEch` > '$today';";
			$res2 = mysql_query($req2) or die (mysql_error());
			if (mysql_num_rows($res2)>0) {

				echo "<b> Vous êtes déjà abonné à cette revue ! <b>";
			}else {
					// date d'échéance ==> date systeme ($today)
					$d = strtotime($today);   // convertir la date systme en seconde
					$DateExp = date("Y-m-d",strtotime("+$nbm month",$d));   // Ajouter le nombre de mois choisi puis convrtir les secondes avec la fonction date

					$req3="INSERT INTO `abonnement` (`Cin`, `Code`, `DateAbon`, `DateEch`) 
						   VALUES ('$cin', '$CodeTitre', '$today', '$DateExp');";
					$res3 = mysql_query($req3) or die (mysql_error());

					if ($res3){
						$req4 ="SELECT `PrixMens` FROM `revue` WHERE `Code` = '$CodeTitre';";
						$res4 = mysql_query($req4) or die (mysql_error());

						$ligne = mysql_fetch_array($res4);
						$mt = $ligne["PrixMens"] * $nbm;		// Montant = nombre de mois * prix mensuel
						echo "<h3 align=center> Montant à payer : $mt DT </h3>"; 
						echo "<h3 align=center> votre abonnement est valide jusqu'au $DateExp  </h3>"; 
					

					} 
			}
}

mysql_close();
?>

<html>
	<head><meta charset="UTF-8"></head>
	<body bgcolor="#6AE6FF"></body>
</html>