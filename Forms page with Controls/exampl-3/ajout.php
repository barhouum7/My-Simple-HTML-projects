<?php
mysql_connect("localhost","root","") or die(mysql_error());
mysql_select_db("bd_sujet1") or die(mysql_error());

$mat=$_POST['m'];
$nom=$_POST['n'];
$pren=$_POST['p'];

$req="SELECT * FROM patient WHERE mat='$mat'";
$res=mysql_query($req) or die(mysql_error());
	if (mysql_num_rows($res)>0) {
		echo "<center><b><i><h3>Patient déjà inscrit !!!</h3></i></b></center>";
	die();
	}

$req="INSERT INTO patient VALUES('$mat','$nom','$pren')";
$res=mysql_query($req) or die(mysql_error());
	if (mysql_affected_rows()>0) {
		echo "<center><b><i><h3>Félicitation l'opération réussite !!!</h3></i></b></center>";
	die();
	}


?>



<!DOCTYPE html>
<html>
<head>
	<title>Ajout d'un patient !!</title>
	<meta charset="UTF-8">
</head>
<body bgcolor="#6AE6FF">
	
	<p><a href="index.html">Retour accueil !</a></p>

</body>
</html>>