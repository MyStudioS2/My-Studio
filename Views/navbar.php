<div id="navbar" class="container">
    <ul id="menu" class="menu1">
        <li id="liste_menu" class="form"><div class="container"><form action="" method="POST"><input type="text" id = "search_form" name"search" value ="" placeholder="Chercher une musique...">
	    <input type="image" id = "icon" src="Views/images/search_icon.svg" name="valider" value="">
	     </form></div></li>
        <li id="liste_menu" class = "liste"><a href="index.php?page=accueil" id = "ahref" class ="acc">Accueil</a></li><hr>
        <li id="liste_menu" class = "liste"><a href="index.php?page=parcourir" id = "ahref" class ="acc">Parcourir</a></li><hr>
        <li id="liste_menu" class = "liste"><a href="index.php?page=nouveautes" id = "ahref" class ="acc">Nouveautés</a></li><hr>
        <li id="liste_menu" class = "liste"><a href="index.php?page=favorites" id = "ahref" class ="acc">Coups de coeur</a></li><hr>
        <li id="liste_menu" class = "liste"><a href="index.php?page=playlists" id = "ahref" class ="acc">Playlists</a></li><hr>
        <li id="liste_menu" class = "liste"><a href="index.php?page=settings" id = "ahref" class ="acc">Paramètres</a></li><hr>
        <li id="liste_menu" class = "liste"><a href="index.php?page=logout" id = "ahref" class ="acc">Déconnexion</a></li><hr>
    </ul>
</div>
<?php 
if($_GET['page'] == "nouveautes") {
include('Models/new_songs.php');
$donnees = news();
print_r($donnees);
echo"<div id='genre'>
<table class='table_genre' border = 2 solid black>
<tr><center><td class='clicALL'>Divers</td><td class='clicRAP'>RAP</td><td>RAI</td><td>RAGGAE</td><td>RNB</td><td>VARIETE</td><td>JAZZ</td><td>BLUES</td></tr></table></div>";
echo"<div class='ALL'>
<table class='ligne' border = 1 solid black>
<tr><center><td>Titre</td><td>Album</td><td>Artiste</td><td>Date de sortie</td><td>Style</td></tr>";
for($i=0;$i<count($donnees);$i++) {
	if($i % 2 == 0) {
		echo "<tr class='pair'>";
	}else{
		echo "<tr class='impair'>";
	}
	for($j=0;$j<count($donnees[$i]);$j++) {
		echo"<td>".$donnees[$i][$j]."</td>";
	}
	echo "</tr>";
}
echo"</center></table></div>";
//include('Models/count_styles.php');
$form=array("RAP", "RAI", "raggae", "rnb", "variete", "jazz", "blues");
for($p=0;$p<count($form);$p++) {
echo "tour ".$p;
	echo"<div class='".$form[$p]."'>
	<table class='ligne' border = 1 solid black>
	<tr><center><td>Titre</td><td>Album</td><td>Artiste</td><td>Date de sortie</td><td>Style</td></tr>";
	for($k=0;$k<count($donnees);$k++) {

		if($donnees[$k][4] == $form[$p]) {
			if($k % 2 == 0) {
				echo "<tr class='pair'>";
			}else{
				echo "<tr class='impair'>";
			}
			for($j=0;$j<count($donnees[$k]);$j++) {
				echo"<td>".$donnees[$k][$j]."</td>";
			}
			echo "</tr>";
		}
	}
	echo"</center></table></div><br><br><br><br><br><br><br><br><br>";
}
}
?>
<script src="Views/jquery.js"></script>
<script src="Views/style.js"></script>
