<?php

mysql_connect('localhost','root','') or die('Connection Problem !') ;
mysql_select_db('bd_bac2016') or die('Database Not Found !') ;

$piece = $_POST['p'] ;
$salle = $_POST['s'] ;
$j = $_POST['j'] ;
$m = $_POST['m'] ;
$a = $_POST['a'] ;
$datee = $a.'-'.$m.'-'.$j ;

$req1 = "SELECT * FROM spectacle WHERE idsalle LIKE '$salle' AND datespectacle LIKE '$datee' ";
$res1 = mysql_query($req1) or die(mysql_error()) ;
if(mysql_num_rows($res1) >0){
    echo "<center><h2>Salle Non Disponible !</h2></center>" ;
    return false ;
}

$req2 = "SELECT * FROM spectacle WHERE idpiece LIKE '$piece' AND datespectacle LIKE '$datee' ";
$res2 = mysql_query($req2) or die(mysql_error()) ;
if(mysql_num_rows($res2) >0){
    echo "<center><h2>Pièce Déjà Programmée !</h2></center>" ;
    die() ;
}

$req3 = "INSERT INTO spectacle VALUES($piece,'$salle','$datee') ";
$res3 = mysql_query($req3) or die(mysql_error()) ;
if(mysql_affected_rows() >0){
    echo "<center><h2>Ajout Effectué Avec Succès. </h2></center>" ;
}
mysql_close() ;