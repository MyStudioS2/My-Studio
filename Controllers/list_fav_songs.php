<?php
function list_fav_songs($donnees) {
//var_dump($donnees);
        $form=array("RAP", "RAI", "RAGGAE", "RNB", "VARIETE", "JAZZ", "BLUES");
        echo"<div id='genre'>
        <table class='table_genre' border = 2 solid black><tr><td class='clicALL'>Divers</td>";
        for($i=0;$i<count($form);$i++) {
                if($i % 2 == 0) {
                        echo "<td id='pair' class='clic".$form[$i]."'>".$form[$i]."</td>";
                }else{
                        echo "<td id='impair' class='clic".$form[$i]."'>".$form[$i]."</td>";
                }
        }
        echo "</tr></table></div>";

        echo"<div class='ALL'>
        <table class='ligne' border = 1 solid black>
        <tr><td>Pochette</td><td>Titre</td><td>Album</td><td>Artiste</td><td>Date de sortie</td><td>Style</td></tr>";
        for($i=0;$i<count($donnees);$i++) {
                if($i % 2 == 0) {
                        echo "<tr id='pair'>";
                }else{
                        echo "<tr id='impair'>";
                }
                for($j=0;$j<count($donnees[$i])-1;$j++) {
                        if($j == 0) {
                                echo "<td><img width='20%' height='40%' src='".$donnees[$i][$j]."'></td>";
                        }else{
                                echo"<td>".$donnees[$i][$j]."</td>";
                        }
                }
                echo "</tr>";
        }
        echo"</table></div>";


}

?>
