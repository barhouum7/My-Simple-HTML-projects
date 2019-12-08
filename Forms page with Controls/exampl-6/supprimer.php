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

$req2 = "DELETE FROM eleves WHERE cin = '$cin'";
$res2 = mysql_query($req2) or die (mysql_error());

if($res2) echo "<b>Suppression effectue avec succes !!!</b>";

?>