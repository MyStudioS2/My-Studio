<?php

include 'Controllers/session_check.php';
        if(session_set($_SESSION['id']) == 0) {
               echo"<center>Veuillez vous connecter pour acceder aux pages du site<br><a href='index.php?page=login'>Cliques ici</a></center>";
        }else{
                include 'Views/html_top.html';
                include 'Views/barre.php';
                include 'Views/navbar.php';
                include 'Models/fav_songs.php';
                include 'Controllers/list_fav_songs.php';
		$donnees = fav_songs();
		list_fav_songs($donnees);
		
        }


?>
