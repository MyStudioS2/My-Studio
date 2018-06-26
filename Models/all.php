<?php
function all_artists () {

                include_once('Models/db_connect.php');
                $bdd = db_connect();
                $pwd = $bdd->query('SELECT ARTISTS.artist_name, ARTISTS.category FROM ARTISTS WHERE ARTISTS.category = "pro"');
                $i = 0;
                while($ligne = $pwd->fetch() ) {
                $donnees[$i] = $ligne['artist_name'];
                $i++;
                }
$pwd->closeCursor();
                return $donnees;
}
function all_albums () {

                include_once('Models/db_connect.php');
                $bdd = db_connect();
                $pwd = $bdd->query('SELECT ALBUMS.album_name, ALBUMS.album_cover, ALBUMS.release_date FROM ALBUMS ');
                $i = 0;
                while($ligne = $pwd->fetch() ) {
                $donnees[$i][0] = $ligne['album_cover'];
                $donnees[$i][1] = $ligne['album_name'];
                $donnees[$i][2] = "";
                $donnees[$i][3] = $ligne['release_date'];
                $i++;
                }
$pwd->closeCursor();
                return $donnees;
}
function all_songs () {

                include_once('Models/db_connect.php');
                $bdd = db_connect();
                $pwd = $bdd->query('SELECT ALBUMS.album_cover, MUSICS.id_music, MUSICS.title, ALBUMS.album_name, ARTISTS.artist_name,ALBUMS.release_date, STYLES.style_name FROM MUSICS JOIN ALBUMS JOIN ARTISTS JOIN STYLES WHERE ALBUMS.id_album = MUSICS.album AND ARTISTS.id_artist = MUSICS.artist AND STYLES.id_style = MUSICS.style ');

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
$pwd->closeCursor();
                return $donnees;
}

