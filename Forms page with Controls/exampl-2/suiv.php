<?php
mysql_connect("localhost","root","")or die(mysql_error());
mysql_select_db("bac2014_8h")or die(mysql_error());
$d=date("Y/m/d/");
$req="SELECT * FROM patient P,consultation C WHERE C.mat=P.mat";
$res=mysql_query($req)or die(mysql_error());
?>
<div align="center">
<table border="0" width="50%" bgcolor="#008000">
	<tr>
		<td>
		<p align="center"><td><?echo('<font size="7" face="Blackadder ITC" color="#FF0000">nom</font>')?></td>
		</td>
		<td><?echo('<font size="7" face="Blackadder ITC" color="#FF0000">&nbsp;prénom</font>')?></td>
		<td><?echo('<font size="7" face="Blackadder ITC" color="#FF0000">datecons</font>?')?></td>
		<td><?echo('<font size="7" face="Blackadder ITC" color="#FF0000">detailcons</font>')?></td>
		
	</tr>
<?while($t=mysql_fetch_array($res))
{?>


	<tr>
		<td><?echo($t["nom"])?></td>
		<td><?echo($t["prenom"])?></td>
		<td><?echo($t['datecons'])?></td>
		<td><?echo($t["detailcons"])?></td>
	</tr>
</table>

</div>


<?}?>




?>