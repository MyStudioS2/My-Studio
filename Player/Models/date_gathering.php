<?php
    include('./db_connect.php');
    $query[] = "SET lc_time_names = 'fr_FR'";
    $query[]= "SELECT MONTHNAME(CURRENT_TIMESTAMP())";
    
    for($i=0; $i < count($query); $i++){
        $query_params[$i] = NULL;
        try {
            $stmt = $db->prepare($query[$i]);
            $result = $stmt->execute($query_params[$i]);
        }catch(PDOException $ex){   
            die("Failed to run query: " . $ex->getMessage());
        }
        if($i == 1){
        $row = $stmt -> fetchAll();
        }
    }
    var_dump($row);
?>