CREATE DATABASE IF NOT EXISTS mystudio;

CREATE TABLE STYLES {
    id INT(11) NOT NULL AUTO_INCREMENT PRIMARY KEY;
    pseudo VARCHAR(12);
}

CREATE TABLE ARTISTS {
    id INT(11) AUTO_INCREMENT NOT NULL PRIMARY KEY;
    pseudo varchar(12),
    style ENUM('amateur','pro')
}

CREATE TABLE ALBUMS {
    id INT(11)NOT NULL AUTO_INCREMENT PRIMARY KEY;
    album_name varchar(45)
    album_cover BLOB,
}

CREATE TABLE USERS {
    id INT(11) AUTO_INCREMENT NOT NULL PRIMARY KEY;
    pseudo varchar(12),
    pw CHAR(41),
    class ENUM('artiste','utilisateur')
}

CREATE TABLE MUSICS {
    id INT(11) AUTO_INCREMENT NOT NULL PRIMARY KEY;
    title VARCHAR(45),
    featuring VARCHAR(45);
    nb_listening INT(11);
    lyrics BLOB;
    translation BLOB;
    music BLOB;
    style SMALLINT;
    album INT(11);
    artist INT(11);
}

CREATE TABLE PLAYLISTS {
    id int(11) AUTO_INCREMENT NOT NULL PRIMARY KEY;
    play_title VARCHAR(45);
    birthdate DATE;
    users INT(11);

}

CREATE TABLE REGISTERED_IN {
    id INT(11) AUTO_INCREMENT NOT NULL PRIMARY KEY;
    music INT(11);
    playlist INT(11);
}