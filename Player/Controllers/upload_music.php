<?php
session_start();
var_dump($_POST);
var_dump($_FILES);
include('../Models/db_connect.php');
require_once('../Controllers/Functions/PHP/date_to_mysql.php');
switch(isset($_POST)):
    case(isset($_POST['album'])):
    $album_name=$_POST['album'];
    $album_date = $_POST['release_date'];
    $tracks_amount = intval($_POST['track_count']);
    $date = $album_date;
    $artist = "Joey Bad4$$"; 
    /** Création du répertoire de l'album */
    if(!is_dir('C:/Code/bin/mysql/mysql5.7.21/data/mystudio/musics/'.$artist)){
        mkdir('C:/Code/bin/mysql/mysql5.7.21/data/mystudio/musics/'.$artist.'');
    }
    if(!is_dir('C:/Code/bin/mysql/mysql5.7.21/data/mystudio/musics/'.$artist.'/'.$album_name.'')){
        mkdir('C:/Code/bin/mysql/mysql5.7.21/data/mystudio/musics/'.$artist.'/'.$album_name.'');
    } 
    $successmsg = 'Le dossier a bien été créé';
    /** Path pour l'upload */
    $dir='C:/Code/bin/mysql/mysql5.7.21/data/mystudio/musics/'.$artist.'/'.$album_name.'/';
    $cover_path=$dir.basename($_FILES['coverFile']['name']);
    if(move_uploaded_file($_FILES['coverFile']['tmp_name'],$cover_path)){
        echo 'upload successfull<br>';
    }
    include('../Models/insert_album.php');
    include("../Views/add_music_form.php");
    break;
    case(isset($_POST['upload'])):
    $album = $_POST['album_name'];
        $i = 0;
        $artist = "Joey Bad4$$";
        while($i < count($_POST['title'])) {
            $title = htmlspecialchars(trim($_POST['title'][$i]), ENT_QUOTES, 'UTF-8');
            $feat = htmlspecialchars(trim($_POST['feat'][$i]), ENT_QUOTES, 'UTF-8');
            $dir='C:/Code/bin/mysql/mysql5.7.21/data/mystudio/musics/'.$artist.'/'.$album.'/';
            $audio_path=$dir.basename($_FILES['audioFile']['name'][$i]);
            if(move_uploaded_file($_FILES['audioFile']['tmp_name'][$i],$audio_path)){
                echo 'upload successfull<br>';
            }
            /** Insertion des musiques dans la BDD */
            include('../Models/insert_music.php');
            $i++;
        }
        include('../Models/get_music.php');
        $row = $stmt->fetchAll();
        include('../Views/choose_amount.php');
        echo "Bien joué connard";
        /** Path pour l'upload */
        break;
        default:
        include('../Views/choose_amount.php');
    endswitch;
?>
