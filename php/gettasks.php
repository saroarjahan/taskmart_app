<?php
include ("Db.php");
$db = new Db();

$query = "SELECT * from tasks";
$result = $db -> select($query);
if($result === false) {
    $error = $db -> error();
    error_log($error);
    return false;
}


echo json_encode($result);




?>