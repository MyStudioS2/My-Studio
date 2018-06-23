<?php
include('Models/new_songs.php');
$donnees = news();
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
<tr><center><td>Titre</td><td>Album</td><td>Artiste</td><td>Date de sortie</td><td>Style</td>";
for($i=0;$i<count($donnees);$i++) {
        if($i % 2 == 0) {
                echo "<tr id='pair'>";
        }else{
                echo "<tr id='impair'>";
        }
        for($j=0;$j<count($donnees[$i]);$j++) {
                echo"<td>".$donnees[$i][$j]."</td>";
        }
        echo "</tr>";
}
echo"</center></table></div>";
//include('Models/count_styles.php');
for($p=0;$p<count($form);$p++) {
        echo"<div class='".$form[$p]."'>
        <table class='ligne' border = 1 solid black>
        <tr><center><td>Titre</td><td>Album</td><td>Artiste</td><td>Date de sortie</td><td>Style</td></tr>";
	$t=0;
        for($k=0;$k<count($donnees);$k++) {

                if($donnees[$k][4] == $form[$p]) {
                        if($t % 2 == 0) {
                                echo "<tr id='pair'>";
                        }else{
                                echo "<tr id='impair'>";
                        }
                        for($j=0;$j<count($donnees[$k]);$j++) {
                                echo"<td>".$donnees[$k][$j]."</td>";
                        }
                        echo "</tr>";
			$t++;
                }
        }
        echo"</center></table></div><br><br><br><br><br><br><br><br><br>";
}
?>
<script src="Views/jquery.js"></script>
<script src="Views/style.js"></script>
