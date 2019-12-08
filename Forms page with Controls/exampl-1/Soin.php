<?php

$mat = $_POST["ma"] ;
$date = $_POST["ds"] ;
$montsoin = $_POST["ms"] ;

mysql_connect("localhost","root","") or die("Connection Problem !") ;
mysql_select_db("bd123456789") or die("Database Not Found !") ;

$req1 = "SELECT * FROM assure WHERE mat LIKE '$mat' " ;
$res1 = mysql_query($req1) or die(mysql_error()) ;
    if(mysql_num_rows($res1) == 0 ){
        echo "<h2>Vous ête n`est pas inscrit si non verifier votre matricule SVP !</h2>" ;
    }
else{
        $req2 = "SELECT * FROM soin WHERE mat LIKE '$mat' AND datesoin LIKE '$date' " ;
        $res2 = mysql_query($req2) or die(mysql_error()) ;
        if(mysql_num_rows($res2) != 0){
            echo "<h2>Vous ne pouvez pas ajouter un deuxieme soin a la meme journée !</h2>" ;
        }
        else{
            $req3 = "INSERT INTO soin VALUES('$mat','$date','$montsoin') " ;
            $res3 = mysql_query($req3) or die(mysql_error()) ;
                echo "<h2>Soin ajoute avec succes .</h2>" ;
        }

}
mysql_close() ;