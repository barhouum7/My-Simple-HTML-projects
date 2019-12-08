<?php

$mat = $_POST['ma'] ;

mysql_connect("localhost","root","") or die("Connection Problem !") ;
mysql_select_db("bd123456789") or die("Database Not Found !");

$req1 = "SELECT * FROM assure WHERE matricule LIKE '$mat' " ;
$res1 = mysql_query($req1) or die(mysql_error()) ;
if(mysql_num_rows($res1) == 0){
    echo "<h2>Verifier le matricule !</h2>" ;
    die() ;
}

$req2 = "SELECT datesoin , montantsoin FROM soin WHERE matricule LIKE '$mat' " ;
$res2 = mysql_query($req2) or die(mysql_error()) ;
if(mysql_num_rows($res2) == 0){
    echo "<h2>Aucun soin pour cet assure !</h2>" ;
    die() ;
}?>
        <p align="center"><font size="6">Liste des soins</font></p><br /><hr />
        <tabe align="center" border="1">
            <tr align="center">
                <td><b><i>Date</i></b></td>
                <td><b><i>Montant</i></b></td>
            </tr>
            <?php while(($ligne = mysql_fetch_array($res2)) == true){ ?>
                <tr align="center">
                    <td><?php echo $ligne["detesoin"] ?></td>
                    <td><?php echo $ligne["montantsoin"] ?></td>
                </tr>        
            <?php } ?>
        </tabe>
    <?php
mysql_close() ;