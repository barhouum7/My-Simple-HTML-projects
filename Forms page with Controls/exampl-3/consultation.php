<?php
mysql_connect("localhost","root","") or die(mysql_error());
mysql_select_db("bd_sujet1") or die(mysql_error());

$mat=$_POST['m'];
$det=$_POST['d'];
$nbj_pj=$_POST['pj'];

$today= date("Y-m-d");

$req="SELECT * FROM patient WHERE mat='$mat';";
$res=mysql_query($req) or die(mysql_error());
	if (mysql_num_rows($res)==0){
		echo "<center><b><i>Matricule inexistante !!!</i></b></center>";
		die();
	}



 if ($nbj_pj>0) {
	
			$newdate= strtotime($today);
			$dateRDVnew= date("Y-m-d",strtotime("+$nbj_pj day",$newdate));

			$req="INSERT INTO consultation VALUES('$mat','$today','$dateRDVnew','$det');";
}else{

			$req="INSERT INTO consultation VALUES('$mat','$today',NULL,'$det');";

	}

	$res=mysql_query($req) or die(mysql_error());
	if (mysql_affected_rows()>0){
		echo "<center><b><i>L`insertion réussite !!!</i></b></center>";
		die();
	}
mysql_close();

?>
	<p><a href="index.html">Retour accueil !</a></p>


<!DOCTYPE html>
<html>
	<head>
		<title>Consultation PHP !</title>
	</head>
		<body bgcolor="#6AE6FF"></body>

</html>