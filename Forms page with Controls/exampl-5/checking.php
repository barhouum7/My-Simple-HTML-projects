<?php
mysql_connect('localhost','root','') or die ('Connection problem !') ;

$nom = $_POST['n'] ;
$pren = $_POST['p'] ;

echo "<h1 style='color: green; text-align: center;'>Merci <i><< Madame/Monsieur ".$nom." ".$pren." >></i><br/> pour votre inscription nous traiterons votre demande dans 24H .</h1>";