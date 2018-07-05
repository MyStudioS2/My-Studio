<?php
    $query = "INSERT INTO albums (
            id_album,
            album_name,
            album_cover,
            release_date
        ) VALUES (
            :ID,
            :album_name,
            :cover_path,
            :release_date)";
        // Security measures
    $query_params = array(
        ':ID' => NULL,
        ':album_name' => $album_title,
        ':cover_path' => $cover_path,
        ':release_date' =>$date);
    try {
        $stmt = $db->prepare($query);
        $result = $stmt->execute($query_params);
    }catch(PDOException $ex){   
        die("Failed to run query: " . $ex->getMessage());
    }
?>
        