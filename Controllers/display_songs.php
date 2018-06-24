<?php

function display_songs($donnees, $fav) {
  echo "
  <div id='tri'>
  <form action='' method='post'>
   Trier par :
  <select name='tri'>
  <option value=''></option> 
  <option value='new_to_old'>Des plus récentes aux plus anciennes</option> 
  <option value='old_to_new'>Des plus anciennes aux plus récentes</option>
  <option value='a_to_z'>Par artiste(a - z)</option>
  <option value='z_to_a'>Par artiste(z - a)</option>
  <input type='submit' name='envoi' value='valider'>
  </select></form></div>";

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
		for($j=0;$j<count($donnees[$i]);$j++) {
			for($y=0;$y<count($fav);$y++) {
				if($donnees[$i][6] === $fav[$y]) {
					$check = true;
				}
			}
			if($j == 0) {
				echo "<td><img width='20%' height='40%' src='".$donnees[$i][$j]."'></td>";
			}else if($j == 6){
				if($check == true) {
				echo"<td><form action='' method='POST'><button name='delete_fav' value='".$donnees[$i][$j]."'>supprimer aux fav</button></form>";
				}else{
				echo"<td><form action='' method='POST'><button name='add_fav' value='".$donnees[$i][$j]."'>ajouter aux fav</button></form>";
				}
			}else{
				echo"<td>".$donnees[$i][$j]."</td>";
			}
		$check = false;
		}
		echo "</tr>";
	}
	echo"</table></div>";
	for($p=0;$p<count($form);$p++) {
		echo"<div class='".$form[$p]."'>
		<table class='ligne' border = 1 solid black>
		<tr><td>Pochette</td><td>Titre</td><td>Album</td><td>Artiste</td><td>Date de sortie</td><td>Style</td></tr>";
		$t=0;
		for($k=0;$k<count($donnees);$k++) {

			if($donnees[$k][5] == $form[$p]) {
				if($t % 2 == 0) {
					echo "<tr id='pair'>";
				}else{
					echo "<tr id='impair'>";
				}
				for($j=0;$j<count($donnees[$k]);$j++) {
					for($y=0;$y<count($fav);$y++) {
						if($donnees[$k][6] === $fav[$y]) {
							$check = true;
						}
					}
					if($j == 0) {
						echo "<td><img width='20%' height='40%' src='".$donnees[$k][$j]."'></td>";
					}else if($j == 6) {
						if($check == true) {
				echo"<td><form action='' method='POST'><button name='delete_fav' value='".$donnees[$k][$j]."'>supprimer aux fav</button></form>";
						}else{
				echo"<td><form action='' method='POST'><button name='add_fav' value='".$donnees[$k][$j]."'>ajouter aux fav</button></form>";
						}
					}else{
						echo"<td>".$donnees[$k][$j]."</td>";
					}
					$check = false;
				}
				echo "</tr>";
				$t++;
			}
		}
		echo"</table></div><br><br><br><br><br><br><br><br><br>";
	}
}
?>
