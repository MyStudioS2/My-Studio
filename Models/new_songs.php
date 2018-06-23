<?php
function news () {

            $bdd = new PDO('mysql:host=localhost;dbname=mystudio;charset=utf8', 'root', 'isma');
                $pwd = $bdd->prepare('SELECT MUSICS.title, ALBUMS.album_name, ARTISTS.artist_name,ALBUMS.release_date, STYLES.style_name FROM MUSICS JOIN ALBUMS JOIN ARTISTS JOIN STYLES WHERE ALBUMS.id_album = MUSICS.album AND ARTISTS.id_artist = MUSICS.artist AND EXTRACT(MONTH FROM ALBUMS.release_date) = ? AND EXTRACT(YEAR FROM ALBUMS.release_date) = ? AND STYLES.id_style = MUSICS.style ' );
                //$pwd = $bdd->query('SELECT MUSICS.title, ALBUMS.album_name, ARTISTS.artist_name,ALBUMS.release_date FROM MUSICS JOIN ALBUMS JOIN ARTISTS WHERE ALBUMS.id_album = MUSICS.album AND ARTISTS.id_artist = MUSICS.artist');
                $pwd->execute(array(date("m"),
				    date("Y")
			     ));
		$i = 0;
                while($ligne = $pwd->fetch() ) {
		$donnees[$i][0] = $ligne['title'];
		$donnees[$i][1] = $ligne['album_name'];
		$donnees[$i][2] = $ligne['artist_name'];
		$donnees[$i][3] = $ligne['release_date'];
		$donnees[$i][4] = $ligne['style_name'];
		$i++;
		}
$pwd->closeCursor();
                return $donnees;
}

?>

