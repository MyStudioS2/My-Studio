<?php
	session_start();
		echo "<center><h1>Parcourir</h1><br>";
	require('./Models/parameter_account.php');
	require('./Models/parameter_songs.php');
	$data['nom']=$_SESSION['pseudo'];
	$data['id']=search_id_art($data);
	$song=search_song($data);
	//tableau
	for($i=0;$i<sizeof($song);$i++)
	{
		echo "<form action='index.php' method='GET'>
		<input type='hidden' name='page' value='parcourir'>
		<input type='hidden' name='mod' value='".$song[$i]."'>
		<button>Modifier</button>
		</form>
		<form action='index.php' method='GET'>
		<input type='hidden' name='page' value='parcourir'>
		<input type='hidden' name='sup' value='".$song[$i]."'>
		<button>Supprimer</button>
		</form>";
	}
	echo "<form action='index.php' method='GET'>
		<input type='hidden' name='page' value='parcourir'>
		<input type='hidden' name='add' value=''>
		<button>Ajouter une musique</button>
		</form></center>";
?>