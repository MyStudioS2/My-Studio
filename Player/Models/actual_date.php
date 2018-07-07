<?php
    include('./db_connect.php');
    $query = 
    "SELECT 
    DAYNAME(CURRENT_TIMESTAMP()), 
    DAY(CURRENT_TIMESTAMP()), 
    MONTHNAME(CURRENT_TIMESTAMP()), 
    YEAR(CURRENT_TIMESTAMP())";

    $query_params = NULL;

    try {
        $stmt = $db->prepare($query);
        $result = $stmt->execute($query_params);
    }catch(PDOException $ex){   
        die("Failed to run query: " . $ex->getMessage());
    }
    $row = $stmt -> fetchAll();
   $row = implode(" ",$row[0]);
   echo "Salut toi! Nous sommes le {$row} ajd!"
?>