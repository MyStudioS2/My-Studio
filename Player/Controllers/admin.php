<?php

    include('../Player/Models/db_connect.php');
    include('../Player/Models/actual_date.php');
    $actual_date = get_date($db);
    include('../Player/Views/admin_options_pure_css.php');
?>