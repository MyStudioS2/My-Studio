<?php
function news () {

		include_once('Models/db_connect.php');
		$bdd = db_connect();
                $pwd = $bdd->prepare('SELECT ALBUMS.album_cover, MUSICS.id_music, MUSICS.title, ALBUMS.album_name, ARTISTS.artist_name,ALBUMS.release_date, STYLES.style_name FROM MUSICS JOIN ALBUMS JOIN ARTISTS JOIN STYLES WHERE ALBUMS.id_album = MUSICS.album AND ARTISTS.id_artist = MUSICS.artist AND EXTRACT(MONTH FROM ALBUMS.release_date) = ? AND EXTRACT(YEAR FROM ALBUMS.release_date) = ? AND STYLES.id_style = MUSICS.style ');
                $pwd->execute(array(date("m"),
				    date("Y")
			     ));
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

function old_to_new () {

		include_once('Models/db_connect.php');
		$bdd = db_connect();
		$pwd = $bdd->prepare('SELECT ALBUMS.album_cover, MUSICS.title, ALBUMS.album_name, ARTISTS.artist_name,ALBUMS.release_date, STYLES.style_name FROM MUSICS JOIN ALBUMS JOIN ARTISTS JOIN STYLES WHERE ALBUMS.id_album = MUSICS.album AND ARTISTS.id_artist = MUSICS.artist AND EXTRACT(MONTH FROM ALBUMS.release_date) = ? AND EXTRACT(YEAR FROM ALBUMS.release_date) = ? AND STYLES.id_style = MUSICS.style ORDER BY ALBUMS.release_date');
                $pwd->execute(array(date("m"),
				    date("Y")
			     ));
		$i = 0;
                while($ligne = $pwd->fetch() ) {
		$donnees[$i][0] = $ligne['album_cover'];
		$donnees[$i][1] = $ligne['title'];
		$donnees[$i][2] = $ligne['album_name'];
		$donnees[$i][3] = $ligne['artist_name'];
		$line = explode(" ", $ligne['release_date']);
		$donnees[$i][4] = $line[0];
		$donnees[$i][5] = $ligne['style_name'];
		$i++;
		}
$pwd->closeCursor();
                return $donnees;
}
function new_to_old () {

		include_once('Models/db_connect.php');
		$bdd = db_connect();
		$pwd = $bdd->prepare('SELECT ALBUMS.album_cover, MUSICS.title, ALBUMS.album_name, ARTISTS.artist_name,ALBUMS.release_date, STYLES.style_name FROM MUSICS JOIN ALBUMS JOIN ARTISTS JOIN STYLES WHERE ALBUMS.id_album = MUSICS.album AND ARTISTS.id_artist = MUSICS.artist AND EXTRACT(MONTH FROM ALBUMS.release_date) = ? AND EXTRACT(YEAR FROM ALBUMS.release_date) = ? AND STYLES.id_style = MUSICS.style ORDER BY ALBUMS.release_date DESC');
                $pwd->execute(array(date("m"),
				    date("Y")
			     ));
		$i = 0;
                while($ligne = $pwd->fetch() ) {
		$donnees[$i][0] = $ligne['album_cover'];
		$donnees[$i][1] = $ligne['title'];
		$donnees[$i][2] = $ligne['album_name'];
		$donnees[$i][3] = $ligne['artist_name'];
		$line = explode(" ", $ligne['release_date']);
		$donnees[$i][4] = $line[0];
		$donnees[$i][5] = $ligne['style_name'];
		$i++;
		}
$pwd->closeCursor();
                return $donnees;
}

function z_to_a () {

		include_once('Models/db_connect.php');
		$bdd = db_connect();
		$pwd = $bdd->prepare('SELECT ALBUMS.album_cover, MUSICS.title, ALBUMS.album_name, ARTISTS.artist_name,ALBUMS.release_date, STYLES.style_name FROM MUSICS JOIN ALBUMS JOIN ARTISTS JOIN STYLES WHERE ALBUMS.id_album = MUSICS.album AND ARTISTS.id_artist = MUSICS.artist AND EXTRACT(MONTH FROM ALBUMS.release_date) = ? AND EXTRACT(YEAR FROM ALBUMS.release_date) = ? AND STYLES.id_style = MUSICS.style ORDER BY ARTISTS.artist_name DESC');
                $pwd->execute(array(date("m"),
				    date("Y")
			     ));
		$i = 0;
                while($ligne = $pwd->fetch() ) {
		$donnees[$i][0] = $ligne['album_cover'];
		$donnees[$i][1] = $ligne['title'];
		$donnees[$i][2] = $ligne['album_name'];
		$donnees[$i][3] = $ligne['artist_name'];
		$line = explode(" ", $ligne['release_date']);
		$donnees[$i][4] = $line[0];
		$donnees[$i][5] = $ligne['style_name'];
		$i++;
		}
$pwd->closeCursor();
                return $donnees;
}

function a_to_z () {

		include_once('Models/db_connect.php');
		$bdd = db_connect();
		$pwd = $bdd->prepare('SELECT ALBUMS.album_cover, MUSICS.title, ALBUMS.album_name, ARTISTS.artist_name,ALBUMS.release_date, STYLES.style_name FROM MUSICS JOIN ALBUMS JOIN ARTISTS JOIN STYLES WHERE ALBUMS.id_album = MUSICS.album AND ARTISTS.id_artist = MUSICS.artist AND EXTRACT(MONTH FROM ALBUMS.release_date) = ? AND EXTRACT(YEAR FROM ALBUMS.release_date) = ? AND STYLES.id_style = MUSICS.style ORDER BY ARTISTS.artist_name');
                $pwd->execute(array(date("m"),
				    date("Y")
			     ));
		$i = 0;
                while($ligne = $pwd->fetch() ) {
		$donnees[$i][0] = $ligne['album_cover'];
		$donnees[$i][1] = $ligne['title'];
		$donnees[$i][2] = $ligne['album_name'];
		$donnees[$i][3] = $ligne['artist_name'];
		$line = explode(" ", $ligne['release_date']);
		$donnees[$i][4] = $line[0];
		$donnees[$i][5] = $ligne['style_name'];
		$i++;
		}
$pwd->closeCursor();
                return $donnees;
}
?>

