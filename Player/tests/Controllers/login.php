<?php
session_start();
include_once("../tests/Models/db_connect.php");
include('../tests/Controllers/Functions/PHP/messages.php');
include('../tests/Models/actual_date.php');
$actual_date = get_date($db);

switch(isset($_POST['login'])):  
    case 'Register':
    $email = htmlspecialchars(trim($_POST['em']), ENT_QUOTES, 'UTF-8');
    $password = htmlspecialchars(trim($_POST['pw']), ENT_QUOTES, 'UTF-8');

        // check if the combination fname/lname/email is already used
        include('../tests/Models/log_check.php');
        $row = $stmt->fetch();
        $_SESSION['ID'] = $row['ID'];
        $_SESSION['role'] = $row['role'];
        var_dump($row);
        
        if($row){
            include('../tests/Models/status_update.php');
            $successmsg = "Connexion réussie! Redirection en cours";
            header('refresh:5;url=index.php?page=Messages');
        } else {
            $errormsg = "Vous n'avez pas de compte! <a href='index.php?page=Register' class='alert-link'></br>Cliquez ici pour vous enregistrer</a>";
            
        }
        include('../tests/Views/html_top_login.php');
        include('../tests/Views/login.php');
        break;
        default:
        include('../tests/Views/html_top_login.php');
        include('../tests/Views/login.php');
    endswitch;
    
?>