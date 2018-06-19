
<?php
session_start();
require_once("./Controllers/function.php");
set_time_zone("Europe/Amsterdam");
if(isset($_GET['page']))
  switch($_GET['page']):
    case 'register':
        include './Views/html_top.html';
        include './Views/navbar.php';
        include './Controllers/registration_page.php';
        break;
    case 'login';
        include './Views/html_top.html';
        include './Views/navbar.php';
        include './Controllers/login_page.php';
        break;
    case 'logout';
        include './Controllers/logout.php';
        break;
    case 'accueil_membres';
        include './Views/html_top.html';
        include './Views/navbar.php';
        include './Controllers/accueil_membres.php';
        break;
    case 'parcourir';
        include './Views/html_top.html';
        include './Views/navbar.php';
        include './Controllers/show.php';
        break;
    case 'nouveautes';
        include './Views/html_top.html';;
        include './Views/navbar.php';
        include './Controllers/trending.php';
        break;
    case 'favoris';
        include './Views/html_top.html';
        include './Views/navbar.php';
        include './Controllers/favorites.php';
        break;
    case 'playlists';
        include './Views/html_top.html';
        include './Views/navbar.php';
        include './Controllers/playlists.php';
        break;
    case 'settings';
        switch($_SESSION['type']):
            case 'artist':
                include './Views/html_top.html';
                include './Views/navbar.php';
                include './Controllers/artist_settings.php';
                break;
            case 'auditor':
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
include "./Views/html_bottom.php";
?>