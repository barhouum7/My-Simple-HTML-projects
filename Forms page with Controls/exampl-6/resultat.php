<meta charset="UTF-8">
<?
mysql_connect("localhost","root","") or die (mysql_error());
mysql_select_db("serie2_2017") or die (mysql_error());

$cin 	= $_POST["T1"];



$req1 = "SELECT * FROM eleves WHERE cin = '$cin'";
$res1 = mysql_query($req1) or die (mysql_error());

if(mysql_num_rows($res1)==0){
	echo "<b>Le numero CIN est introuvable !!!</b>";
	return false;
}
$ligne= mysql_fetch_array($res1);
if($ligne["moy"]>=10)
	echo "<b><i>Félicitation <u>Admis</u> !!!!</i></b>";
else if($ligne["moy"]>=7)
	echo "<b><i>Bon courage <u>Contrôle</u> !!!!</i></b>";
else if($ligne["moy"]<7)
	echo "<b><i>Désolé <u>Réfusé</u> !!!!</i></b>";

?>