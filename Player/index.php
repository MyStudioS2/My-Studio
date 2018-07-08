<?php
var_dump($_POST);
var_dump($_GET);
    if(isset($_GET['page']))
    switch($_GET['page']):
        case 'administration';
            include './Controllers/admin.php';
            default:
            endswitch;
?>
                
