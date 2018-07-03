<?php
var_dump($_POST);
var_dump($_FILES);
switch(isset($_POST)):
    case(isset($_POST['album'])):
    $album_name=$_POST['album'];
    $tracks_amount = intval($_POST['track_count']);

    include("../Views/add_music_form.php");
    break;
    case(isset($_POST['title'])):
    $title = htmlspecialchars(trim($_POST['title']), ENT_QUOTES, 'UTF-8');
    $album = htmlspecialchars(trim($_POST['album']), ENT_QUOTES, 'UTF-8');
    $date = $_POST['release_date'];
    $feat = htmlspecialchars(trim($_POST['feat']), ENT_QUOTES, 'UTF-8');
    
    /** Création du répertoire de l'album */
    try {
        mkdir('../')
        mkdir('../musics/'.$artist.'/'.$album.'');
    } finally{
        $successmsg = 'Le dossier a bien été créé';
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
