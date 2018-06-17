<?php
        if(!isset($_SESSION['ID'])){
            echo '<center>Redirection</center>';
            header("refresh:3;url=../views/login_page.php");
            die();
        } 
?>