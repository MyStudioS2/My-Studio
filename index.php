<?php
session_start();
/*<<<<<<< HEAD
var_dump($_SESSION);
  if(isset($_GET['page']))
    switch($_GET['page']):
        case 'home';
        include 'Controllers/home.php';
      break;
        case 'register';
        include 'Controllers/registration_page.php';
      break;
        case 'login';
        include 'Controllers/login.php';
      break;
        case 'logout';
        include 'Controllers/logout.php';
      break;
        case 'Controllers/accueil_membres.php'
      break;
        case 'parcourir';
        include 'Controllers/session_check.php';
      break;
        case 'nouveautes';
        include 'Controllers/releases.php';
      break;
        case 'favoris';
        include 'Controllers/favoris.php';
      break;
        case 'playlists';
        include 'Controllers/playlists.php';
      break;
        case 'settings';
        include 'Controllers/settings.php':
      break;
      default:
      include 'error/404/404.php';
    endswitch;
  } else {
    include "Views/html_top.html";
    include 'Views/home.php';
    //include './Controllers/home.php';
  }
  include "Views/html_bottom.html";
=======
require_once("./Controllers/function.php"); */
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
	switch($_GET['request']):
	    case 'musics';
		include 'Controllers/parcourir_m.php';
		break;
	    case 'albums';
		include 'Controllers/parcourir_al.php';
		break;
	    case 'artists';
		include 'Controllers/parcourir_ar.php';
		break;
            default:
                include './error/404/404.php';
            endswitch;
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
//>>>>>>> 402eb69428fef7da8faaa3f0cc3bc308c8831673
?>
