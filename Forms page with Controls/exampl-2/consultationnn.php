<meta charset="UTF-8">
<?php
@mysql_connect("localhost","root","") or die (mysql_error());
@mysql_select_db("bd2014_8h") or die (mysql_error());

// Recupération des données

$mat 	= $_POST["T1"];
$detail = $_POST["S1"];
$nbj	= $_POST["T3"];

$d = date("Y-m-d");

// Tester l'existance de la matricule dans la base

$req1 = "SELECT * FROM `patient` WHERE `Mat` ='$mat';";
$res1=mysql_query($req1) or die (mysql_error());

if(mysql_num_rows($res1)==0){
	echo "<b>Matricule inexistante !</b>";
} else{
		//Ajouter le nombre de jour a la date actuelle ou bien insérer NULL dans le champs DateRDV
		if($nbj>0){
					$d1=strtotime($d);
					$DateRDV=date("Y-m-d",strtotime("+$nbj day",$d1));
					
					$req = "INSERT INTO `consultation` (`Mat`, `dateCons`, `DateRDV`, `DetailCons`)
							VALUES ('$mat', '$d', '$DateRDV', '$detail');";

		} else{
					$req = "INSERT INTO `consultation` (`Mat`, `dateCons`, `DateRDV`, `DetailCons`)
					VALUES ('$mat', '$d', NULL, '$detail');";
			}
		
		$res=mysql_query($req) or die (mysql_error());

		if($res) echo "<b>Ajout effectué avec succès !</b>";
		
  	}

 mysql_close(); 
 ?>  
<p><a href="index.html">Accueil</a></p>