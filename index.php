<?php
session_start();
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
?>
