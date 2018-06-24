<?php
function db_connect() {
$bdd =new PDO('mysql:host=localhost;dbname=mystudio;charset=UTF8', 'root', 'isma', array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));

return $bdd;
}

?>
