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
        include './Controllers/favorites.php';
        break;
    case 'playlists';
        include './Controllers/playlists.php';
        break;
    case 'settings';
        include './Controllers/settings.php';
    default:
        include './error/404/404.php';
  endswitch;
} else {
    include 'Controllers/home.php';
}
    include "Views/html_bottom.html";
?>