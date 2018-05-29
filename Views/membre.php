<?php session_start(); ?>

<!DOCTYPE html>
<html>

	<head>
		
	<link href="../css/membre.css" rel="stylesheet" type="text/css" media="screen"/>
	
		<title>Accueil</title>
	</head>

	<body>
		
			<form action='' method='get'>
			<input type='text' name='search' value=''>
			<input type='submit' name='val' value='Rechercher'><br>
			<input type='checkbox' name='choix' value='1'> Musique
			<input type='checkbox' name='choix' value='2'> Album
			<input type='checkbox' name='choix' value='3'> Artiste
			</form>
			<br>
			<hr class='separation'/>";
		<nav>
        <ul id="menu">
            <li class=mv><a href="#">Accueil</a></li>
            <li class=mv><a href="#">A Parcourir</a></li>
            <li class=mv><a href="#">A Ecouter</a></li>
            <li class=mv><a href="#">Mes Musiques</a></li>
            <li class=mv><a href="#">Mes Favoris</a></li>
            <li class=mv><a href="#">Mes Playlistes</a></li>
            <li class=mv><a href="#">Paramètres</a></li>
        </ul>
 	   </nav>
 	   <?php
 	   	for($i=0;$i<12;$i++)
 	   	{ 
 	   		echo "<br>";
 	   	}
 	   ?>
        <hr class='separation'/>
		<a href="/.php">Deconnexion</a>
	</body>
</html>
