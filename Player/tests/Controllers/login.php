<?php
session_start();
include_once("../Models/db_connect.php");
include('../Controllers/Functions/PHP/messages.php');

switch(isset($_POST['register'])):  
    case 'Register':
    $email = htmlspecialchars(trim($_POST['em']), ENT_QUOTES, 'UTF-8');
    $password = htmlspecialchars(trim($_POST['pw']), ENT_QUOTES, 'UTF-8');

        // check if the combination fname/lname/email is already used
        include('../Models/log_check.php');
        $row = $stmt->fetch();
        $_SESSION['ID'] = $row['ID'];
        $_SESSION['role'] = $row['role'];
        
        if(!empty($row)){
            include('../Models/status_update.php');
            $successmsg = "Connexion réussie! Redirection en cours";
            header('refresh:5;url=index.php?page=Messages');
        } else {
            $errormsg = "Vous êtes déjà connecté! <a href='index.php?page=Messages' class='alert-link'></br>Cliquez ici pour accèder à l'espace membre</a>";
        }
        break;
        default:
    endswitch;
    
include('../Views/html_top_login.php');
include('./Views/login.php');
?>