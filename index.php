<?php
session_start();
//require_once("./Controllers/function.php"); */
if(isset($_GET['page'])) {
  switch($_GET['page']):
    case 'register';
        include 'Controllers/register.php';
        break;
    case 'login';
        include 'Controllers/log.php';
        break;
    case 'logout';
        include 'Controllers/logout.php';
        break;
    case 'accueil_membres';
	include 'Controllers/accueil_membres.php';
        break;
    case 'parcourir';
        include 'Controllers/show.php';
        break;
    case 'nouveautes';
        include 'Controllers/nouveautes.php';
        break;
    case 'favoris';
        include './Controllers/favoris.php';
        break;
    case 'playlists';
        include './Controllers/playlists.php';
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
    include 'Controllers/home.php';
}
    include "Views/html_bottom.html";
?>
