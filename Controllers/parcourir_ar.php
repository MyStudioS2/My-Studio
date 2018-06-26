<?php
include 'Controllers/session_check.php';
        if(session_set($_SESSION['id']) == 0) {
               echo"<center>Veuillez vous connecter pour acceder aux pages du site<br><a href='index.php?page=login'>Cliques ici</a></center>";
        }else{
                include 'Views/html_top.html';
                include 'Views/navbar.php';
                include('Models/all.php');
                include('Controllers/list.php');

			if($_POST['tri'] == "" ) {
				$art = all_artists();
				list_artists($art);
			}
			/*else if($_POST['tri'] == "new_to_old") {
				$fav = fav_songs();
				$donnees = new_to_old();
				display_songs($donnees, $fav);
			}else if($_POST['tri'] == "old_to_new") {
				$fav = fav_songs();
				$donnees = old_to_new();
				display_songs($donnees, $fav);
			}*/
	}
?>
