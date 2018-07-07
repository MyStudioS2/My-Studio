<?php
    function get_date(&$db){
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
    var_dump($row);
    $pattern = array("/^l/","/^j/","/^f/","/^m/","/^a/","/^s/","/^o/","/^n/","/^d/");
    $new_letter = array("l","J","F","M","A","S","O","N","D");
    $row[0]['MONTHNAME(CURRENT_TIMESTAMP())'] = preg_replace($pattern,$new_letter,$row[0]['MONTHNAME(CURRENT_TIMESTAMP())']);
    $row[0]['DAYNAME(CURRENT_TIMESTAMP())'] =  preg_replace($pattern, $new_letter, $row[0]['DAYNAME(CURRENT_TIMESTAMP())']); 
    $row = implode(" ",$row[0]);
    return $row;
}
?>