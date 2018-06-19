
<?php
session_start();
require_once("./controllers/function.php");
set_time_zone("Europe/Amsterdam");
if(isset($_GET['page']))
  switch($_GET['page']):
    case 'register':
        include './views/html_top.html';
        include './views/navbar.php';
        include './controllers/registration_page.php';
        break;
    case 'login';
        include './views/html_top.html';
        include './views/navbar.php';
        include './controllers/login_page.php';
        break;
    case 'logout';
        include './controllers/logout.php';
        break;
    case 'accueil_membres';
        include './views/html_top.html';
        include './views/navbar.php';
        include './controllers/appointment.php';
        break;
    case 'parcourir';
        include './views/html_top.html';
        include './views/navbar.php';
        include './controllers/vet.php';
        break;
    case 'nouveautes';
        include './views/html_top.html';;
        include './views/navbar.php';
        include './controllers/new_appointment.php';
        break;
    case 'favoris';
        include './views/html_top.html';
        include './views/navbar.php';
        include './controllers/dispo.php';
        break;
    case 'playlists';
        include './views/html_top.html';
        include './views/navbar.php';
        include './controllers/infos.php';
        break;
    case 'settings';
        switch($_SESSION['type']):
            case 'artist':
                include './views/html_top.html';
                include './views/navbar.php';
                include './controllers/artist_settings.php';
                break;
            case 'auditor':
                include './views/html_top.html';
                include './views/navbar.php';
                include './controllers/auditor_settings.php';
                break;
    default:
        include './error/404/404.php';
  endswitch;
else {
    include './views/html_top.html';
    include './views/navbar.php';
    include './controllers/home.php';
}
include "./views/html_bottom.php";
?>