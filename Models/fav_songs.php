<?php
function fav_songs () {

                include_once('Models/db_connect.php');
                $bdd = db_connect();
                $pwd = $bdd->prepare('SELECT ALBUMS.album_cover, MUSICS.id_music, MUSICS.title, ALBUMS.album_name, ARTISTS.artist_name,ALBUMS.release_date, STYLES.style_name, FAV_BY.music, FAV_BY.username FROM MUSICS JOIN ALBUMS JOIN ARTISTS JOIN STYLES JOIN FAV_BY WHERE ALBUMS.id_album = MUSICS.album AND ARTISTS.id_artist = MUSICS.artist AND STYLES.id_style = MUSICS.style AND FAV_BY.music = MUSICS.id_music AND FAV_BY.username = ?');
                $pwd->execute(array($_SESSION['id']));
		if($_GET['page'] == "favoris") {
		                $i = 0;
                while($ligne = $pwd->fetch() ) {
                $donnees[$i][0] = $ligne['album_cover'];
                $donnees[$i][1] = $ligne['title'];
                $donnees[$i][2] = $ligne['album_name'];
                $donnees[$i][3] = $ligne['artist_name'];
                $line = explode(" ", $ligne['release_date']);
                $donnees[$i][4] = $line[0];
                $donnees[$i][5] = $ligne['style_name'];
                $donnees[$i][6] = $ligne['id_music'];
                $i++;
                }

		}else{
                $i = 0;
                while($ligne = $pwd->fetch() ) {
                $donnees[$i] = $ligne['music'];
                $i++;
                }
		}
$pwd->closeCursor();
                return $donnees;
}

