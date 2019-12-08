Ajouter un Abonné !!☻

<?php
//Connection avec le serveur et la base de donnée...
mysql_connect("localhost","root","") or die(mysql_error());
mysql_select_db("bd2014_10h") or die(mysql_error());

//Récuperation de donnée...
$cin=$_POST['c'];
$codetitre=$_POST['ct'];
$nbm=$_POST['n'];

$today= date("Y-m-d"); //C'est la date courante...

//Préparation de la réquette SQL pour tester l'existance de l'abonné dans la base...
$req="SELECT * FROM `abonne` WHERE `cin` = '$cin';";
$res=mysql_query($req) or die(mysql_error());

if (mysql_num_rows($res)==-1) {
	echo "<b><i>Abonné inexistant !!</i></b>" ;

}else{
		$req1="SELECT * FROM `abonnement` WHERE `cin` = '$cin' AND `code` = '$codetitre' AND `dateEch` > '$today' ;";
		$res1=mysql_query($req1) or die(mysql_error());

		if (mysql_num_rows($res1)>0) {
			echo "<b><i>Vous êtes déjà abonné à cette revue !!</i></b>";
			# code...
		} else {
			//Date d'échéance ===> Date système ($today) ...
			$d= strtotime($today); //Convertir la date système en secondes ...
			$dateEchCalculé= date("Y-m-d",strtotime("+$nbm month",$d)); //Ajouter le nombre de mois choisi puis convertir les secondes avec la fonction date .....
				$req2="INSERT INTO `abonnement` (`cin`,`code`,`dateAbon`,`dateEch`) VALUES ('$cin','$codetitre','$today','$dateEchCalculé');";
				$res2=mysql_query($req2) or die(mysql_error());

				if ($res2) {
					# code...
				$req3="SELECT R.prixMens * $nbm 'Le montant à payer' , A.dateEch FROM `abonnement A` , `revue R`
							WHERE `R.code` = `A.code` ;";
				mysql_query($req3) or die(mysql_error());

				
				}
			# code...
		}
		
}
mysql_close();
?>