<?
mysql_connect("localhost","root","") or die (mysql_error());
mysql_select_db("serie2_2017") or die (mysql_error());

$cin 	= $_POST["T1"];
$np 	= $_POST["T2"];
$sec 	= $_POST["D1"];
$sexe 	= $_POST["R1"];
$moy 	= $_POST["T3"];

$j = $_POST["j"];
$m = $_POST["m"];
$a = $_POST["a"];

$d = $a."-".$m."-".$j;

$req1 = "SELECT * FROM eleves WHERE cin = '$cin'";
$res1 = mysql_query($req1) or die (mysql_error());

if(mysql_num_rows($res1)>0){
	echo "<b>Eleve deja inscrit !!!</b>";
	return false;
}

$req2 = " INSERT INTO eleves VALUES ('$cin', '$np', '$sec', '$sexe', '$d', $moy);";
$res2 = mysql_query($req2) or die (mysql_error());

if($res2) echo "<b>Ajout effectue avec succes !!!</b>";

?>