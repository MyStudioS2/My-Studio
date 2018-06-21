<?php
	session_start();
	require("../Controllers/session_check.php");
	session_check($_SESSION['pseudo']);
	echo"<center><h1>Compte</h1><br>";
	echo "Changer de nom : 
	<form action='../Views/changename_page.php' method='POST'>
	<button>Changer</button>
	</form><br><br>";
	echo "Changer de statut : 
	<form action='.php' method='POST'>
	<button>Changer</button>
	</form><br><br>";
	echo "Ajouter une musique : 
	<form action='.php' method='POST'>
	<button>Ajouter</button>
	</form><br><br>";
	echo "Modifier mes musiques : 
	<form action='.php' method='POST'>
	<button>Modifier</button>
	</form><br><br>";
	echo "Modifier mes favoris : 
	<form action='.php' method='POST'>
	<button>Modifier</button>
	</form><br><br>";
	echo "Modifier mes playlists : 
	<form action='.php' method='POST'>
	<button>Modifier</button>
	</form></center>";
?>