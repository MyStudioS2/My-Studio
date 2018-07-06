<?php
    include('../Models/db_connect.php');
    require_once('../Controllers/Functions/PHP/fill_all_files.php');
    $query[0] = 
    "SELECT artist_name
    FROM artists
    WHERE id_artist = :artist_id";
    $query[1] = 
    "DELETE 
    FROM musics
    WHERE artist = :artist_id";
    $query[2] = 
    "DELETE
    FROM albums
    WHERE artist_id = :artist_id";
    $query[3] = 
    "DELETE
    FROM artists
    WHERE id_artist = :artist_id";

    for($i=0; $i< count($query); $i++){
        $query_params[$i] = array(":artist_id" => 5);
        try {
            $stmt = $db->prepare($query[$i]);
            $result = $stmt->execute($query_params[$i]);
            echo $query[$i];
            
        }catch(PDOException $ex){
            die("Failed to run query: " . $ex->getMessage());
        }
        if($i == 0){
        $artist_row = $stmt -> fetchAll();
        }
    }
    $dir('../../../data/mystudio/musics/'.$artist_row[0]['artist_name']);
    kill_all_files($dir);
?>