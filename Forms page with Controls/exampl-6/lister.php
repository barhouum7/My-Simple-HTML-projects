<meta charset="UTF-8">
<?
mysql_connect("localhost","root","") or die (mysql_error());
mysql_select_db("serie2_2017") or die (mysql_error());



$req1 = "SELECT * FROM eleves";
$res1 = mysql_query($req1) or die (mysql_error());

if(mysql_num_rows($res1)==0){
	echo "<b>Le numero CIN est introuvable !!!</b>";
	return false;
}
?>
<html>
<body bgcolor="#6AE6FF">
<table border="1" width="100%" align="center" bgcolor="#C0C0C0">
	<tr bgcolor="yellow">
		<td align="center"><i><b><font size="4">Cin</font></b></i></td>
		<td align="center"><i><b><font size="4">Nom et prénom</font></b></i></td>
		<td align="center"><i><b><font size="4">Section</font></b></i></td>
		<td align="center"><i><b><font size="4">Sexe</font></b></i></td>
		<td align="center"><i><b><font size="4">Date de naissance</font></b></i></td>
	</tr>
<? while ($ligne=mysql_fetch_array($res1)) { ?>
	<tr>
		<td><? echo $ligne[0]; ?></td>
		<td><? echo $ligne[1]; ?></td>
		<td><? echo $ligne[2]; ?></td>
		<td><? echo $ligne[3]; ?></td>
		<td><? echo $ligne[4]; ?></td>
	</tr>

	<?} ?>

</table>
</body>
</html>
