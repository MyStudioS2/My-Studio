<?php
    $query = "INSERT INTO musics (
            id_music,
            featuring,
            title,
            music_path
        ) VALUES (
            :ID,
            :title,
            :featuring,
            :music_path)";
        // Security measures
    $query_params = array(
        ':ID' => NULL,
        ':title' => $title,
        ':featuring' => $feat,
        ':music_path' =>$audio_path);
    try {
        $stmt = $db->prepare($query);
        $result = $stmt->execute($query_params);
    }catch(PDOException $ex){   
        die("Failed to run query: " . $ex->getMessage());
    }
?>
        