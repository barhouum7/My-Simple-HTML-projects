<?
mysql_connect("localhost","root","")or die(mysql_error());
mysql_select_db("bac2014_8h")or die(mysql_error());
$mat=$_POST["m"];
$det=$_POST["d"];
$jo=$_POST["j"];
$x=date("Y/m/d");
$dy=strtotime($x);
$req="SELECT * FROM `consultation`WHERE`mat`=$mat";
$res=mysql_query($req) or die(mysql_error());
if(mysql_num_rows($res)!=0)
{echo("<h1 align='center'><font face='Blackadder ITC'size='7' color='#00FF00'><i>
********* exsisite deja **********</i></font></h1>
");return false;}

else
$req1="INSERT INTO  `consultation` (  `mat` ,  `datecons` ,  `daterdv` ,  `detailcons` ) 
VALUES (
'$mat','$x',  '$dy',  '$det');";

 mysql_query($req1) or die(mysql_error());
 
if(mysql_affected_rows())
{echo("<h1 align='center'><font face='Blackadder ITC'size='7' color='#00FF00'><i>
*********resuite loperation **********</i></font></h1>
");}

?>