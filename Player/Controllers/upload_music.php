<?php
include_once("../Models/db_connect.php");
var_dump($_POST);
var_dump($_FILES);
switch(isset($_POST)):
    case(!empty($_POST['title'])):
    $title = htmlspecialchars(trim($_POST['title']), ENT_QUOTES, 'UTF-8');
    $album = htmlspecialchars(trim($_POST['album']), ENT_QUOTES, 'UTF-8');
    $date = $_POST['release_date'];
    $feat = htmlspecialchars(trim($_POST['feat']), ENT_QUOTES, 'UTF-8');

    $dir='D:/Applications_code/wamp64/bin/mysql/mysql5.7.21/data/mystudio/musics/';
    $audio_path=$dir.basename($_FILES['audioFile']['name']);
    if(move_uploaded_file($_FILES['audioFile']['tmp_name'],$audio_path)){
        echo 'upload successfull<br>';
    }
    include('../Models/insert_music.php');

    include('../Models/get_music.php');
    $row = $stmt->fetchAll();
    include('../Views/upload_music.php');

        break;
        default:
        include('../Views/upload_music.php');
    endswitch;
?>
