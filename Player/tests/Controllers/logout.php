<?php
    session_start();
    include("../tests/Models/db_connect.php");
    include('../tests/Models/actual_date.php');
    include('../tests/Controllers/Functions/PHP/messages.php');
    $actual_date = get_date($db);
    include('../tests/Models/logout.php');
    include('../tests/Controllers/Functions/PHP/session_keyler.php');
    $successmsg = "Déconnexion réussie, à bientôt! :D";
    include('../tests/Views/html_top_login.php');
    include('../tests/Views/login.php');
    header('refresh:10;url=../tests/index.php?page=Login');
?>