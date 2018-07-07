<?php
    include('./db_connect.php');
    include('./actual_date.php');
    $lol = get_date($db);
    echo $lol;
?>