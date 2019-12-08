<?php

$mat = $_POST["ma"] ;
$cin = $_POST["c"] ;
$nom = $_POST["n"] ;
$pren = $_POST["p"] ;
$etat = $_POST["ec"] ;
$nbenf = $_POST["nbe"] ;
$typea = $_POST["ta"] ;

mysql_connect("localhost","root","") or die("Connection Problem !") ;
mysql_select_db("bd123456789") or die("Database Not Found !") ;

$request = " INSERT INTO assure ( matricule , ncin , nom , prenom , etatcivil , nbrenfant , typeassurance )
                VALUES('$mat','$cin','$nom','$pren','$etat',$nbenf,'$typea') " ;

echo "<h2><a href='Inscription.html'>Retour...</a></h2>" ;
$result = mysql_query($request) or die(mysql_error()) ;

        echo "<h2>Inscription effectuée avec succès.</h2>" ;

mysql_close() ;