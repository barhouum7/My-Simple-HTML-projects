<?
mysql_connect("localhost","root","") or die (mysql_error());
mysql_select_db("serie2_2017") or die (mysql_error());

$cin 	= $_POST["T1"];
$moy 	= $_POST["T2"];



$req1 = "SELECT * FROM eleves WHERE cin = '$cin'";
$res1 = mysql_query($req1) or die (mysql_error());

if(mysql_num_rows($res1)==0){
	echo "<b>Le numero CIN est introuvable !!!</b>";
	return false;
}

$req2 = "update  eleves set moy = $moy WHERE cin = '$cin'";
$res2 = mysql_query($req2) or die (mysql_error());

if($res2) echo "<b>La modification effectue avec succes !!!</b>";

?>