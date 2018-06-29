<?php
	session_start();
		echo "<center><h1>Mes musiques</h1><br>";
	require('./Models/parameter_account.php');
	require('./Models/parameter_songs.php');
	$data['nom']=$_SESSION['pseudo'];
	$data['id']=search_id_art($data);
	$song=search_id_song($data);
	//tableau
	for($i=0;$i<sizeof($song)-2;$i++)
	{
		echo "<form action='index.php' method='GET'>
		<input type='hidden' name='page' value='settings'>
		<input type='hidden' name='nb' value='trois'>
		<input type='hidden' name='change' value='mod'>
		<input type='hidden' name='id' value='".$song[0][$i]."'>
		".$song[1][$i]." ".$song[2][$i]."<button>Modifier</button>
		</form>
		<form action='index.php' method='GET'>
		<input type='hidden' name='page' value='settings'>
		<input type='hidden' name='nb' value='trois'>
		<input type='hidden' name='change' value='sup'>
		<input type='hidden' name='id' value='".$song[0][$i]."'>
		<button>Supprimer</button>
		</form>";
	}
	echo "<form action='index.php' method='GET'>
	<input type='hidden' name='page' value='settings'>
	<input type='hidden' name='nb' value='trois'>
	<input type='hidden' name='change' value='add'>
	<input type='hidden' name='table' value='song'>
	<button>Ajouter une musique</button>
	</form>";
	echo "<form action='index.php' method='GET'>
	<input type='hidden' name='page' value='settings'>
	<input type='hidden' name='nb' value='trois'>
	<input type='hidden' name='change' value='add'>
	<input type='hidden' name='table' value='album'>
	<button>Ajouter un album</button>
	</form>";
	echo "<form action='index.php?page=settings' method='GET'>
	<input type='hidden' name='page' value='settings'>
	<br><button>Retourner aux paramètres</button>
	</form></center>";

/*
	echo "<table border=1>
		<tr><th colspan=5>Produits en vente<br></tr>";
	for($i=0;$i<$a;$i++)
	{
		echo "<tr><td>".$tab3[$i][0]."<td>Quantite : ".$tab3[$i][1]." kg<td>".$tab3[$i][2]."€ le kg";
		echo "<td><form action='./examen.modifier.prod.php' method='get'>
		<input type='hidden' name='prod' value='".$tab3[$i][4]."'>
		<button>Modifier</button></form>";
		echo "<td><form action='./examen.supprimer.prod.php' method='get'>
		<input type='hidden' name='prod' value='".$tab3[$i][4]."'>
		<button>Supprimer</button></form>";
		echo "</tr>";
	}
	echo "<tr><td><form action='./examen.nouveau.prod.php' method='get'>
	<button>Nouveau produit</button></form> <td>&nbsp; <td>&nbsp; <td>&nbsp; <td>&nbsp;</tr>";
	echo "</table>";
*/
?>