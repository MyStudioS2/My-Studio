<?php
	session_start();
	/*$_SESSION['pseudo']='Clotilde';
	$_SESSION['id']=1;
	$_SESSION['pw']='chocho';
	$_SESSION['type']='artist';*/
	require("../Controllers/session_check.php");
	session_check($_SESSION['pseudo']);
	echo"<center><h1>Compte</h1><br>";
	echo "Changer de nom : 
	<form action='./index.php' method='GET'>
	<input type='hidden' name='page' value='settings'>
	<input type='hidden' name='truc' value='un'>
	<button>Changer</button>
	</form><br><br>";
	echo "Changer de statut : 
	<form action='.php' method='GET'>
	<button>Changer</button>
	</form><br><br>";
	echo "Ajouter une musique : 
	<form action='.php' method='GET'>
	<button>Ajouter</button>
	</form><br><br>";
	echo "Modifier mes musiques : 
	<form action='.php' method='GET'>
	<button>Modifier</button>
	</form><br><br>";
	echo "Modifier mes favoris : 
	<form action='.php' method='GET'>
	<button>Modifier</button>
	</form><br><br>";
	echo "Modifier mes playlists : 
	<form action='.php' method='GET'>
	<button>Modifier</button>
	</form></center>";
?>