<?php
var_dump($_POST);
var_dump($_FILES);
switch(isset($_POST)):
    case(isset($_POST['album'])):
    $album_name=$_POST['album'];
    $date = $_POST['release_date'];
    $tracks_amount = intval($_POST['track_count']);
    $artist = "Joey Bad4$$";
    include("../Views/add_music_form.php");
    /** Création du répertoire de l'album */
        if(!is_dir('C:/Code/bin/mysql/mysql5.7.21/data/mystudio/musics/'.$artist)){
        mkdir('C:/Code/bin/mysql/mysql5.7.21/data/mystudio/musics/'.$artist.'');
        }
        if(!is_dir('C:/Code/bin/mysql/mysql5.7.21/data/mystudio/musics/'.$artist.'/'.$album_name.'')){
        mkdir('C:/Code/bin/mysql/mysql5.7.21/data/mystudio/musics/'.$artist.'/'.$album_name.'');
        }
        $successmsg = 'Le dossier a bien été créé';
        echo $successmsg;
    break;
    
    case(isset($_POST['upload'])):
    $i = 0;
    while($i < count($_POST[0]['title'])) {
    $title = htmlspecialchars(trim($_POST[0]['title'][$i]), ENT_QUOTES, 'UTF-8');
    $album = htmlspecialchars(trim($_POST['album']), ENT_QUOTES, 'UTF-8');
    $feat = htmlspecialchars(trim($_POST[0]['feat'][$i]), ENT_QUOTES, 'UTF-8');

    $i++
    }

    /** Path pour l'upload */
    $dir='../musics/'.$artist.'/'.$album;
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
        include('../Views/choose_amount.php');
    endswitch;
?>
