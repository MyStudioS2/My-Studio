<?php
/*<<<<<<< HEAD
        /* Module connexion à la bdd */
/*
    $db_username = "root";
    $db_password = "";
    $db_host = "localhost";
    $db_name = "veterinaires";
    $db_options = array(PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES utf8');

          try {
              $db = new PDO("mysql:host={$db_host};dbname={$db_name};charset=utf8;lc_time_names=fr_FR", $db_username, $db_password, $db_options);
          } catch(PDOException $ex) {
              die("Failed to connect to the database: " . $ex->getMessage());
          }

    $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $db->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
=======*/
function db_connect() {
$bdd =new PDO('mysql:host=localhost;dbname=mystudio;charset=UTF8', 'root', 'isma', array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));

return $bdd;
}
/*>>>>>>> 402eb69428fef7da8faaa3f0cc3bc308c8831673*/

?>
