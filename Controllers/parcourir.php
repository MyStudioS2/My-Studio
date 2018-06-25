<?php
include 'Controllers/session_check.php';
        if(session_set($_SESSION['id']) == 0) {
               echo"<center>Veuillez vous connecter pour acceder aux pages du site<br><a href='index.php?page=login'>Cliques ici</a></center>";
        }else{
                if(isset($_POST['add_fav'])) {
                        include 'Models/add_fav.php';
                        add_fav($_POST['add_fav']);
                }
                if(isset($_POST['delete_fav'])) {
                        include 'Models/delete_fav.php';
                        delete_fav($_POST['delete_fav']);
                }
                include 'Views/html_top.html';
                include 'Views/barre.php';
                include 'Views/navbar.php';
                include('Models/all_songs.php');
                include('Controllers/display_songs.php');
                include('Models/fav_songs.php');
                include('Views/search.html');
                if($_POST['tri'] == "" ) {
                        $fav = fav_songs();
                        $donnees = all_songs();
                        display_songs($donnees, $fav);
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