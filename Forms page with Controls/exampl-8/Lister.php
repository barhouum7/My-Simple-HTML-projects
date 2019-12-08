<?php

mysql_connect("localhost","root","") or die (mysql_error());
mysql_select_db("bd2014_10h") or die (mysql_error());

$req1="SELECT * FROM `revue`;";
$res1 = mysql_query($req1) or die (mysql_error());
?>
<table border="2" width="40%" bordercolorlight="#FFFFFF" bordercolor="#FFFF00" align="center">
	<tr align="center">
		<td><font color="#FFFF00"><b>Titre</b></font></td>
		<td><font color="#FFFF00"><b>Prix Mensuel</b></font></td>
	</tr>

<? while ($ligne = mysql_fetch_array($res1)) {  ?>

	<tr align="center">
		<td><? echo $ligne["Titre"];	?></td>
		<td><? echo $ligne["PrixMens"];	?></td>
	</tr>

  <? } ?>
 
	
</table>

<?
mysql_close();
?>

<html>
	<body bgcolor="#6AE6FF">
</body>
</html>