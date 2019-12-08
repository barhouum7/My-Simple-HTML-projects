<?php

mysql_connect('localhost','root','') or die('Connection Problem !') ;
mysql_select_db('bd_bac2016') or die('Database Not Found !') ;

$req = "SELECT titre, libelle, datespectacle FROM spectacle SP , piece P , salle S
            WHERE ( P.idpiece = SP.idpiece) AND (S.idsalle = SP.idsalle)
                ORDER BY datespectacle , titre " ;
$res = mysql_query($req) or die(mysql_error()) ;

    if(mysql_num_rows($res) >0){
        echo '<table border="1" width="70%" align="center">
                <tr bgcolor="yellow">
                    <td>N°d`ordre</td>
                    <td>Titre De La Pièce</td>
                    <td>Libellé De La Salle</td>
                    <td>Date De Spectacle</td>
                </tr>' ;
        $i = 0 ;
        while($l = mysql_fetch_array($res)){
            $i++ ;
            echo "<tr bgcolor='#C0C0C0'>
                    <td>$i</td>
                    <td>$l[0]</td>
                    <td>$l[1]</td>
                    <td>$l[2]</td>
                </tr>" ;
        }
        echo '</table>';
    }else{
        echo "<center><h2>La Listes Est Vide !</h2></center>" ;
    }
 mysql_close() ;