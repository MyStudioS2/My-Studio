<?php
session_start();
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
    } else {
        include('../Views/choose_amount.php');
        header("refresh:15;url=../Controllers/upload_music.php");
        die("<center><div class='container' style='border:0;
        border-radius: 6px;
        border-color: #decba4;
        color:#3333333; 
        font-size:20px; 
        background-color:#E73E01; 
        width:345px; height:60px; cursor:pointer'>Vous avez déjà ajouter cet album.<br> Souhaitez-vous le modifier?</p></div></center>");
    }
    $successmsg = 'Le dossier a bien été créé';
    /** Path pour l'upload */
    $dir='C:/Code/bin/mysql/mysql5.7.21/data/mystudio/musics/'.$artist.'/'.$album_name.'/';
    $cover_path=$dir.basename($_FILES['coverFile']['name']);
    if(move_uploaded_file($_FILES['coverFile']['tmp_name'],$cover_path)){
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
                echo "L'upload du titre numéro ".($i+1)." a réussi.<br>";
            }
            /** Insertion des musiques dans la BDD */
            include('../Models/insert_music.php');
            $i++;
        }
        include('../Models/get_music.php');
        $row = $stmt->fetchAll();
        include('../Views/choose_amount.php');
        /** Path pour l'upload */
        break;
        default:
        include('../Views/choose_amount.php');
        include('../Models/get_music.php');
        $row = $stmt->fetchAll();
        if(!empty($row)){
            echo '<div class ="parent" style="text-align:center;height:200px">';
            echo '<center>Playlist en cours :</center>';

        echo "<div class='child' style='float:right; margin-top: -32%; max-height:100%;overflow-y:scroll'>";
        for($i=0; $i< count($row); $i++){
            if(!empty($row[$i]['music_path'])){
                echo "<img src='".$row[$i]['cover']."' height='50px' width ='50px'><a href='file:///".$row[$i]['music_path']."'>".$row[$i]['title']."</a><br>";
            }
        }
        echo '<div><p><form method="POST" action="">
        <button type="submit" accesskey="n" style="margin-bottom:20px;margin-top:-20px;">Nouvelle liste aléatoire</button></form></p></div>';
        echo "</div>";
        echo "</div>";
        }
    endswitch;
?>
