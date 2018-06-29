<?php
    $query = "
    SELECT
    title, featuring, music_path
    FROM musics
    ORDER BY title ASC";
        $query_params = null;
        try {
            $stmt = $db->prepare($query);
            $result = $stmt->execute($query_params);
        }catch(PDOException $ex){
            die("Failed to run query: " . $ex->getMessage());
        }
?>