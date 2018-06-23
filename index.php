<?php
session_start();
//require_once("./Controllers/function.php"); */
if(isset($_GET['page'])) {
  switch($_GET['page']):
    case '';
        include 'Views/home.php';
        break;
    case 'register';
        include 'Views/registration_page.php';
        break;
    case 'login';
        include 'Views/login_page.php';
        break;
    case 'logout';
        include 'Controllers/logout.php';
        include 'Views/login_page.php';
        break;
    case 'accueil_membres';
        include 'Controllers/session_check.php';
	if(session_set($_SESSION['id']) == 0) {
        include 'Views/login_page.php';
	}else{
	include 'Views/html_top.html';
	include 'Views/barre.php';
	include 'Views/navbar.php';
	include 'Controllers/accueil_membres.php';
	}
        break;
    case 'parcourir';
        include 'Controllers/session_check.php';
	if(session_set($_SESSION['id']) == 0) {
        include 'Views/login_page.php';
	}else{
        include 'Views/html_top.html';
        include 'Views/barre.php';
        include 'Views/navbar.php';
        include 'Controllers/show.php';
	}
        break;
    case 'nouveautes';
        include 'Controllers/session_check.php';
	if(session_set($_SESSION['id']) == 0) {
        include 'Views/login_page.php';
	}else{
        include 'Views/html_top.html';
        include 'Views/barre.php';
        include 'Views/navbar.php';
        include 'Controllers/nouveautes.php';
	}
        break;
    case 'favoris';
        include 'Controllers/session_check.php';
	if(session_set($_SESSION['id']) == 0) {
        include 'Views/login_page.php';
	}else{
        include './Views/html_top.html';
        include './Views/navbar.php';
        include './Controllers/favorites.php';
	}
        break;
    case 'playlists';
        include 'Controllers/session_check.php';
	if(session_set($_SESSION['id']) == 0) {
        include 'Views/login_page.php';
	}else{
        include './Views/html_top.html';
        include './Views/navbar.php';
        include './Controllers/playlists.php';
	}
        break;
    case 'settings';
        if(isset($_SESSION['type']))
        switch($_SESSION['type']):
            case 'artist';
                include './Views/html_top.html';
                include './Views/navbar.php';
                include './Controllers/artist_settings.php';
                break;
            case 'auditor';
                include './Views/html_top.html';
                include './Views/navbar.php';
                include './Controllers/auditor_settings.php';
                break;
            default:
                include './error/404/404.php';
            endswitch;
            else {
                include './Views/html_top.html';
                include './Views/navbar.php';
                include './Controllers/home.php';
            }
    default:
        include './error/404/404.php';
  endswitch;
} else {
    include "Views/html_top.html";
    include 'Views/home.php';
    //include './Controllers/home.php';
}
    include "Views/html_bottom.html";
?>
