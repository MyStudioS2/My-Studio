<?php
    include('./db_connect.php');
    
    $query= "SELECT MONTHNAME(CURRENT_TIMESTAMP())";
    $query_params = NULL;

    try {
        $stmt = $db->prepare($query);
        $result = $stmt->execute($query_params);
    }catch(PDOException $ex){   
        die("Failed to run query: " . $ex->getMessage());
    }

    $current_date= $stmt->fetchAll();
    $db = NULL;
    echo $current_date[0]['MONTHNAME(CURRENT_TIMESTAMP())'];
?>